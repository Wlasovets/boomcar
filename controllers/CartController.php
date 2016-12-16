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

    $resData = array();

    // Если товара в корзине нет, то добавляем его
    if (isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false) {

        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
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

        foreach ($rsProducts as $product) {
            $totalCost += $product['price'];
        }
    }

    $smarty->assign('Page Title', 'Koszyk');
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('totalCost', $totalCost);

    loadTemplate($smarty, 'header');
    LoadTemplate($smarty, 'cart');
    LoadTemplate($smarty, 'footer');
}