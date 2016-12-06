<?php
/**
 *Модель для марки автомобиля
 *
 */

/**
 * @param $carModelId - id марки автомобиля
 * @return array - массив данных марки автомобиля
 *
 */
function getCarModelById($carModelId)
{
    $carModelId = intval($carModelId);

    $sql = "SELECT *
            FROM car_models
            WHERE id = '{$carModelId}'";

    $rs = mysql_query($sql);

    return mysql_fetch_assoc($rs);
}