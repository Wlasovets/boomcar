<?php
/**
 * Модель для таблицы заказов (orders)
 */

/**
 * @param string $name
 * @param string $phone
 * @param string $address
 * @return integer ID созданного заказа
 */
function makeNewOrder($name, $phone, $address, $specnotes)
{
    //> Инициализация переменных
    $userId = $_SESSION['user']['id'];
    $name = htmlspecialchars(mysql_real_escape_string(trim($name)));
    $phone = htmlspecialchars(mysql_real_escape_string(trim($phone)));
    $address = htmlspecialchars(mysql_real_escape_string(trim($address)));
    $specnotes = htmlspecialchars(mysql_real_escape_string(trim($specnotes)));

    $comment = "id пользователя: {$userId}<br />
                Имя: {$name}<br />
                Телефон: {$phone}<br />
                Адрес: {$address}<br />
                Замечание пользователя: {$specnotes}";

    $dateCreated = date('Y.m.d H:m:s');
    $userIp = $_SERVER['REMOTE_ADDR'];
    //<

    // формирование запроса к БД
    $sql = "INSERT INTO
            orders (`user_id`, `date_created`, `date_payment`, `status`, `comment`, `user_ip`)
            VALUES ('{$userId}', '{$dateCreated}', null, '0', '{$comment}', '{$userIp}')";

    $rs = mysql_query($sql);

    if($rs) {
        $orderId = mysql_insert_id();
        return $orderId;
    }

    return false;
}

/**
 * Получить список заказов с привязкой к продуктам для пользователя $userId
 *
 * @param integer $userId - ID пользователя
 * @return array массив заказов с привязкой к продуктам
 */
function getOrdersWithProductsByUser($userId)
{
    $userId = intval($userId);

    $sql = "SELECT * FROM orders
            WHERE `user_id` = '{$userId}'
            ORDER BY id DESC";

    $rs = mysql_query($sql);

    $smartyRs = array();

    while ($row = mysql_fetch_assoc($rs)) {
        $smartyRs[] = $row;
    }

    return $smartyRs;
}