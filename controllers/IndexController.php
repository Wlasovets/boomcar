<?php

// Контроллер гравной страницы

//Подключение моделей
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function testAction()
{
    echo 'IndexController.php > testAction';
}

/**
 * Формирование главной страницы сайта
 *
 * @param $smarty шаблонизатор
 */
function indexAction($smarty)
{
    $rsCategories = getAllCats();
    $rsProducts = getLastProducts(15);

    // Обращаемся к массиву по ссылке (&$product), для того, что бы можно было изменять значения массива
    foreach ($rsProducts as &$product) {

        if (in_array($product['id'], $_SESSION['cart'])) {
            $product["itemInCart"] = 1;
        } else {
            $product["itemInCart"] = 0;
        }
    }
    // Уничтожаем ссылку, т.к. после цикла она установилась на последний элемент
    unset($product);

    $smarty->assign('pageTitle', 'Produkty');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}