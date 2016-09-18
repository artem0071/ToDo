<?php
/**
 * Created by PhpStorm.
 * User: artemdegtarev
 * Date: 18.09.16
 * Time: 22:17
 */
include_once '../settings.php';

global $CONN;

$User = $_POST['user'];

$sql = "DELETE FROM `Tasks` WHERE `Task_Status`= '1' AND `User_ID` = '".$User."'";
$result = $CONN->query($sql);