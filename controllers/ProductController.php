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
include_once '../models/CarModel.php';
include_once '../models/ProducerMolel.php';

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

    // Получить марки автомобиля
    $rsCarModel = getCarModelById($rsProduct['car_model_id']);

    // Получить производителя запчасти
    $rsProducer = getProducerById($rsProduct['producer_id']);

    $smarty->assign('pageTitle', '');
    $smarty->assign('rsProduct', $rsProduct);
    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsCarModel', $rsCarModel);
    $smarty->assign('rsProducer', $rsProducer);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'product');
    loadTemplate($smarty, 'footer');
}