<?php
/**
 * Created by PhpStorm.
 * User: artemdegtarev
 * Date: 17.09.16
 * Time: 21:38
 */

include_once 'settings.php';
include_once 'modules/Auth.php';
session_start();

//подключение к БД
$CONN = new mysqli(HOST, USER, PASS, DB);
if ($CONN->connect_errno) exit("Нет подключения к БД");
$CONN->set_charset("utf8");

$user = Auth::Checking();

include_once 'views/main.php';