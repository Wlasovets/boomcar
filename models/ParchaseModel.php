<?php
/**
 * Модель для таблицы продукции
 */

function setPurchaseForOrder($orderId, $cart)
{
    $sql = "INSERT INTO
            purchase (`order_id`, `product_id`, `price`, `amount`)
            VALUES ";

    $values = array();

    // формируем массив строк для запроса для каздого заказа
    foreach ($cart as $item) {
        $values[] = "('{$orderId}', '{$item['id']}', '{$item['price']}', '{$item['cnt']}')";
    }

    // преобразование массива в строку
    $sql .= implode($values, ',');
    $rs = mysql_query($sql);

    return $rs;
}