<?php
/**
 * Created by PhpStorm.
 * User: artemdegtarev
 * Date: 18.09.16
 * Time: 1:06
 */
include_once '../settings.php';

global $CONN;

$User = $_POST['user'];

$sql = "SELECT * FROM `Tasks` WHERE `User_ID` = '".$User."' AND `Task_Status` = '0' ORDER BY 1 DESC";
$result = $CONN->query($sql);

$arr = array();

while ($row = $result->fetch_assoc()){
    $arr[] = $row;
}
echo json_encode($arr);
