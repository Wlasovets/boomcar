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
    if ($_SESSION['cart'] && array_search($itemId, $_SESSION['cart']) === false) {

        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    }
    else {
        $resData['success'] = 0;
    }

    return json_encode($resData);
}