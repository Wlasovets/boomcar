<?php
/**
 * Модель для работы с таблицей категорий
 */


/**
 * Получить главные категории с привязками дочерних
 *
 * @return array - массив категорий
 */
function getAllCats()
{
    $sql = 'SELECT *
            FROM categories';

    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}

/**
 * Получить данные категории по id
 *
 * @param $catId
 * @return array
 */
function getCatById($catId)
{
    $catId = intval($catId);
    $sql = "SELECT *
            FROM categories
            WHERE id = '{$catId}'";

    $rs = mysql_query($sql);

    return mysql_fetch_assoc($rs);
}