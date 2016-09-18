<?php
/**
 * Created by PhpStorm.
 * User: artemdegtarev
 * Date: 18.09.16
 * Time: 13:01
 */
include_once '../settings.php';

global $CONN;

$User = $_POST['user'];

$sql = "SELECT COUNT(*) FROM `Tasks` WHERE `User_ID` = '".$User."' AND `Task_Status` = '0'";
$result = $CONN->query($sql);

$row = $result->fetch_row();

echo $row[0];