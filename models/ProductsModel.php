<?php
/**
 * Модель для таблицы продукции (products)
 *
 */

/**
 * Получаем последние добавленные товары
 *
 * @param null $limit Лимит товаров
 * @return array|bool Массив товаров
 */
function getLastProducts($limit = null)
{
    $sql = "SELECT products.name AS name, car_models.name AS carModelName, producers.name AS producerName,
            products.description, products.image, products.price, products.car_model_id, products.category_id,
            products.id, products.original_image, products.producer_id, products.quantity, products.state, products.status
            FROM products
            LEFT JOIN car_models
            ON products.car_model_id = car_models.id
            LEFT JOIN producers
            ON products.producer_id = producers.id
            ORDER BY id DESC";

    if ($limit) {
        $sql .= " LIMIT {$limit}";
    }

    $rs = mysql_query($sql);

    return createSmartyRsArray($rs);
}

/**
 * Получить продукты по категории itemId
 *
 * @param $itemId
 * @return array|bool
 */
function getProductsByCat($itemId)
{
    $itemId = intval($itemId);
    $sql = "SELECT *
            FROM products
            WHERE category_id = '{$itemId}'";

    $rs = mysql_query($sql);

    return createSmartyRsArray($rs);
}

/**
 * Получить данные продукта по id
 *
 * @param $itemId - id продукта
 * @return array - массив данных продукта
 */
function getProductById($itemId)
{
    $itemId = intval($itemId);

    $sql = "SELECT *
            FROM products
            WHERE id = '{$itemId}'";

    $rs = mysql_query($sql);

    return mysql_fetch_assoc($rs);
}