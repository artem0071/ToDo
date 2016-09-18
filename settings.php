<?php
/**
 * Created by PhpStorm.
 * User: artemdegtarev
 * Date: 17.09.16
 * Time: 21:37
 */

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'todo');
define('SALT', '1234');

//подключение к БД
$CONN = new mysqli(HOST, USER, PASS, DB);
if ($CONN->connect_errno) exit("Нет подключения к БД");
$CONN->set_charset("utf8");