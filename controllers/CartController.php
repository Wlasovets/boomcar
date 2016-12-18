<?php
/**
 * Контроллер работает с корзиной (/cart/)
 */

// Подключаем модели
include_once '../models/ProductsModel.php';

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