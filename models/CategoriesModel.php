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