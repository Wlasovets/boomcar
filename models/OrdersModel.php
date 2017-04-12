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
function makeNewOrder($name, $phone, $address)
{
    //> Инициализация переменных
    $userId = $_SESSION['user']['id'];
    $name = htmlspecialchars(mysql_real_escape_string($name));
    $phone = htmlspecialchars(mysql_real_escape_string($phone));
    $address = htmlspecialchars(mysql_real_escape_string($address));

    $comment = "id пользователя: {$userId}<br />
                Имя: {$name}<br />
                Телефон: {$phone}<br />
                Адрес: {$address}";

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