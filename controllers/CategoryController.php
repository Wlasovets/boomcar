<?php
/**
 * CategoryController.php
 *
 *Контроллер страницы категории (/category/1)
 *
 */

// Подключаем модули
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

/**
 * Формирование страницы категории
 *
 * @param $smarty
 */
function indexAction($smarty)
{
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if (!$catId) exit();

    $rsCategory = getCatById($catId);
    $rsCategories = getAllCats();

    if($catId == 1)
        $rsProducts = getLastProducts();
    else
        $rsProducts = getProductsByCat($catId);

    $smarty->assign('PageTitle', 'Produkty w kategorii ' . $rsCategory['name']);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}