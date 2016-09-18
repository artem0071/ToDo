<?php

/**
 * Created by PhpStorm.
 * User: artemdegtarev
 * Date: 17.09.16
 * Time: 21:40
 */
class Auth
{
    public static function Checking(){

        if (empty($_COOKIE['USER'])){
            return self::Singin();
        }
        else return self::Login();
    }

    public function Login(){
        global $CONN;

        $sql = "SELECT * FROM `Users` WHERE `User_ID` = '" . $_COOKIE['USER'] . "';";
        $result = $CONN->query($sql);
        $row = $result->fetch_assoc();

        if ($row == NULL) {
            // Поменяли COOKIE на несоществующий ID
        }

        if ($row['User_Pass'] != 0) {        //если установлен пароль

        }
        else return $row;


        
    }

    public function Singin(){
        global $CONN;

        $sql = "SELECT MAX(`User_ID`) FROM `Users`";
        $result = $CONN->query($sql);
        $row = $result->fetch_row();
        $user_id = $row[0] + 1;

        $sql = "INSERT INTO `Users`(`User_Name`) VALUES ('NoName(".$user_id.")')";
        $result= $CONN->query($sql);

        setcookie('USER',$user_id,time()+60*60*24,'/');

        return $user_id;
    }
}