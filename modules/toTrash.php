<?php
/**
 * Created by PhpStorm.
 * User: artemdegtarev
 * Date: 18.09.16
 * Time: 14:25
 */
include_once '../settings.php';

global $CONN;

$User = $_POST['user'];
$Task = $_POST['task'];

$sql = "UPDATE `Tasks` SET `Task_Status`='1' WHERE `User_ID` = '".$User."' AND `Task_ID` = '".$Task."'";
$result = $CONN->query($sql);
