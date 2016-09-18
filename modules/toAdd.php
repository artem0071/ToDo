<?php
/**
 * Created by PhpStorm.
 * User: artemdegtarev
 * Date: 17.09.16
 * Time: 23:46
 */
include_once '../settings.php';

global $CONN;

$User = $_POST['user'];
$Text = $_POST['text'];

$sql = "INSERT INTO `Tasks`(`User_ID`, `Task_Text`) VALUES ('".$User."','".$Text."')";
$result = $CONN->query($sql);

echo true;
