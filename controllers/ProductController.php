<?php
/**
 * ProductController.php
 *
 * Контроллер страницы товара
 *
 */

// Подключение моделей
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

/**
 * Формирование страницы продукта
 *
 * @param $smarty
 *
 */
function indexAction($smarty)
{
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;

    if(!$itemId) exit();

    // Получить данные продукта
    $rsProduct = getProductById($itemId);

    // Получить категорию продукта
    $rsCategory = getCatById($rsProduct['category_id']);

    $smarty->assign('pageTitle', '');
    $smarty->assign('rsProduct', $rsProduct);
    $smarty->assign('rsCategory', $rsCategory);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'product');
    loadTemplate($smarty, 'footer');
}