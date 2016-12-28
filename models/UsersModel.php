<?php
/**
 * Модель для таблицы пользователей (users)
 *
 */

/**
 * @param string $email - почта
 * @param string $pwdMD5 - пароль зашифрованный в MD5
 * @param string $name - имя пользователя
 * @param string $phone - телефон
 * @param string $address - адрес пользователя
 * @return array|bool|resource - массив данных нового пользователя
 */
function registerNewUser($email, $pwdMD5, $name, $phone, $address)
{

    $email = htmlspecialchars(mysql_real_escape_string($email));
    $name = htmlspecialchars(mysql_real_escape_string($name));
    $phone = htmlspecialchars(mysql_real_escape_string($phone));
    $address = htmlspecialchars(mysql_real_escape_string($address));

    $sql = "INSERT INTO
            users(`email`, `pwd`, `name`, `phone`, `address`)
            VALUES ('{$email}', '{$pwdMD5}', '{$name}', '{$phone}', '{$address}')";

    $rs = mysql_query($sql);

    if ($rs) {

        $sql = "SELECT *
                FROM users
                WHERE (`email` = '{$email}' AND `pwd` = '{$pwdMD5}')
                LIMIT 1";

        $rs = mysql_query($sql);
        $rs = createSmartyRsArray($rs);

        if (isset($rs[0])) {
            $rs['success'] = 1;
        } else {
            $rs['success'] = 0;
        }

    } else {
        $rs['success'] = 0;
    }

    return $rs;
}

/**
 * Проверка параметров для регистрации пользователя
 *
 * @param string $email - email
 * @param string $pwd1 - пароль
 * @param string $pwd2 - повтор пароля
 * @return array - результат
 */
function checkRegisterParams($email, $pwd1, $pwd2)
{
    $res = null;

    if (!$email) {
        $res['success'] = false;
        $res['message'] = 'Введите email';
    }

    if (!$pwd1) {
        $res['success'] = false;
        $res['message'] = 'Введите пароль';
    }

    if (!$pwd2) {
        $res['success'] = false;
        $res['message'] = 'Введите повтор пароля';
    }

    if ($pwd1 != $pwd2) {
        $res['success'] = false;
        $res['message'] = 'Пароли не совпадают';
    }

    return $res;
}

/**
 * Проверка почты (есть ли email адрес в БД)
 *
 * @param string $email
 * @return array|bool - строка из таблицы users либо пустой массив, либо false - если результат запроса пустой
 */
function checkUserEmail($email)
{
    $email = mysql_real_escape_string($email);
    $sql = "SELECT id
            FROM users
            WHERE email = '{$email}'";

    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}