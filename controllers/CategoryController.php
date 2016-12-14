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

    if ($catId == 1)
        $rsProducts = getLastProducts();
    else
        $rsProducts = getProductsByCat($catId);

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

    $smarty->assign('PageTitle', 'Produkty w kategorii ' . $rsCategory['name']);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}