<?php
/**
 * Контроллер работает с корзиной (/cart/)
 */

// Подключаем модели
include_once '../models/ProductsModel.php';
include_once '../models/OrdersModel.php';
include_once '../models/PurchaseModel.php';

/**
 * @param int id GET параметр - ID добавляемого продукта в корзину
 * @return json - информация об операции (успех, количество элементов в корзине)
 */
function addtocartAction()
{
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId) return false;

    // Количество товара, которое указал пользователь на странице продукта
    $itemQuantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;

    $resData = array();

    // Если товара в корзине нет, то добавляем его
    if (isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false) {

        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $_SESSION['productQuantities'][$itemId] = $itemQuantity;
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
    }

    echo json_encode($resData);
}

/**
 * Удаление продукта из корзины
 *
 * @param int id GET параметр - ID удаляемого из корзины продукта
 * @return json - информация об операции (успех, количество элементов в корзине)
 */
function removefromcartAction()
{
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId) exit();

    $resData = array();
    $key = array_search($itemId, $_SESSION['cart']);

    if ($key !== false) {
        unset($_SESSION['cart'][$key]);
        unset($_SESSION['productQuantities'][$itemId]);
        $resData['success'] = 1;
        $resData['cntItems'] = count($_SESSION['cart']);
    } else {
        $resData['success'] = 0;
    }

    echo json_encode($resData);
}

/**
 * Формирование страницы корзины
 *
 * @param $smarty
 * @link /cart/
 */
function indexAction($smarty)
{
    $totalCost = 0;
    $rsProducts = array();

    // Получение товаров по их ID и подсчет общей стоимости товаров в корзине
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {

        $itemsIds = $_SESSION['cart'];
        $rsProducts = getProductsFromArray($itemsIds);
        $customQuantities = $_SESSION['productQuantities'];

        // Обращаемся к массиву по ссылке (&$product), для того, что бы можно было изменять значения массива
        foreach ($rsProducts as &$product) {

            $product['customQuantity'] = $customQuantities[$product['id']];
            $product['realPrice'] = $product['customQuantity'] * $product['price'];
            $totalCost += ($product['customQuantity'] * $product['price']);
        }
        // Уничтожаем ссылку, т.к. после цикла она установилась на последний элемент
        unset($product);
    }


    $smarty->assign('Page Title', 'Koszyk');
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('totalCost', $totalCost);

    loadTemplate($smarty, 'header');
    LoadTemplate($smarty, 'cart');
    LoadTemplate($smarty, 'footer');
}

/**
 * Формирование страницы заказа
 */
function orderAction($smarty)
{
    // Получаем массив идентификаторов (ID) продуктов корзины
    $itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;

    // Если корзина пуста, то редирект в корзину
    if(! $itemsIds) {
        redirect('/cart/');
        return;
    }

    // Получаем из массива $_POST количество покупаемых товаров
    $itemsCnt = array();

    foreach ($itemsIds as $item) {
        // Формируем ключ для массива $_POST
        $postVar = 'itemCnt_' . $item;

        // Создаем элемент массива количества покупаемого товара
        // Ключ массива - ID товара, значение массива - количество товара
        // $itemsCnt[1] = 3; товар с ID = 1 покупают 3 штуки
        $itemsCnt[$item] = isset($_POST[$postVar]) ? $_POST[$postVar] : null;
    }

    // Получаем список продуктов по массиву корзины
    $rsProducts = getProductsFromArray($itemsIds);

    // Добавляем каждому продукту дополнительное поле
    // 'realPrice' = количество продуктов * цена продукта
    // 'cnt' - количество покупаемого товара

    // &$item - для того, чтобы можно было изменить значение элемента массива $rsProducts
    $i = 0;
    $totalCost = 0;
    foreach ($rsProducts as &$item) {
        $item['cnt'] = isset($itemsCnt[$item['id']]) ? $itemsCnt[$item['id']] : 0;
        if($item['cnt']) {
            $item['realPrice'] = $item['cnt'] * $item['price'];
            $totalCost += $item['realPrice'];
        } else {
            // Если товар в корзине есть, а количество расно 0, то удаляем этот товар
            unset($rsProducts[$i]);
        }
        $i++;
    }

    if(! $rsProducts) {
        echo "Корзина пуста";
        return;
    }

    // Полученный массив покупаемых товаров помещаем в сессионную переменную
    $_SESSION['saleCart'] = $rsProducts;

    $smarty->assign('Title', 'Order');
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('totalCost', $totalCost);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'order');
    loadTemplate($smarty, 'footer');
}

/**
 * AJAX функция сохранения заказа
 *
 * @param array $_SESSION['saleCart'] массив покупаемых продуктов
 * @return json информация о результате выполнения
 */
function saveorderAction()
{
    // получаем массив плкупаемых товаров
    $cart = isset($_SESSION['saleCart']) ? $_SESSION['saleCart'] : null;

    // если корзина пуста, то возвращаем ответ с ошибкой в формате json
    if(!$cart) {
        $resData['success'] = 0;
        $resData['message'] = 'Нет товара для заказа';
        echo json_encode($resData);
        return;
    }

    // данные из формы
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $specnotes = $_POST['specnotes'];

    // если данные в форме не заполнены, то возвращаем ответ с ошибкой в формате json
    if(!$name || !$phone || !$address) {
        $resData['success'] = 0;
        $resData['message'] = 'Заполните все обязательные поля';
        echo json_encode($resData);
        return;
    }

    // создаем новый заказ и получаем его ID
    $orderId = makeNewOrder($name, $phone, $address, $specnotes);

    // если заказ не создан, то возвращаем ошибку
    if(!$orderId) {
        $resData['succe'] = 0;
        $resData['message'] = 'Ошибка создания заказа';
        echo json_encode($resData);
        return;
    }

    // сохраняем товары для созданного товара
    $res = setPurchaseForOrder($orderId, $cart);

    // если успешно, то формируем ответ, удаляем переменные корзины
    if($res) {
        $resData['success'] = 1;
        $resData['message'] = 'Заказ сохранен';
        unset($_SESSION['saleCart']);
        unset($_SESSION['cart']);
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка внесения данных для заказа №' . $orderId;
    }

    echo json_encode($resData);
}