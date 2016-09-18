<?php
/**
 * Created by PhpStorm.
 * User: artemdegtarev
 * Date: 18.09.16
 * Time: 14:09
 */
include_once '../settings.php';

global $CONN;

$User = $_POST['user'];

$sql = "UPDATE `Tasks` SET `Task_Status`='1' WHERE `User_ID` = '".$User."'";
$result = $CONN->query($sql);
