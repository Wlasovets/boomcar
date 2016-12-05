<?php
/**
 * Модель для производителя продукта
 *
 */

/**
 * @param $producerId - id производителя
 * @return array - массив данных производителя
 */
function getProducerById($producerId)
{
    $producerId = intval($producerId);

    $sql = "SELECT *
            FROM producer
            WHERE id = '{$producerId}'";

    $rs = mysql_query($sql);

    return mysql_fetch_assoc($rs);
}