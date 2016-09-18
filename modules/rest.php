<?php
/**
 * Created by PhpStorm.
 * User: artemdegtarev
 * Date: 18.09.16
 * Time: 22:44
 */
include_once '../settings.php';

global $CONN;

$User = $_POST['user'];
$Arr = $_POST['arr'];

foreach ($Arr as $arr){
    $sql = "UPDATE `Tasks` SET `Task_Status`= '0' WHERE `User_ID` = '".$User."' AND `Task_ID` = '".$arr."'";
    $result = $CONN->query($sql);
}