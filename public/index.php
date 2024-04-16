<?php
require_once("../config.php");
require_once("../control/dbConnect.control.php");
require_once("../control/route.control.php");
require_once("../model/login.model.php");




if (isset($_POST["login"],$_POST["pwd"])) {
    $cleanedLogin = htmlspecialchars(strip_tags(trim($_POST["login"])));
    $cleanedPwd = htmlspecialchars(strip_tags(trim($_POST["pwd"])));
    
    $loginTry = attemptLogin($db, $cleanedLogin, $cleanedPwd);

}


if (isset($_POST["create_login"],$_POST["create_pwd"])) {
    $cleanedLogin = htmlspecialchars(strip_tags(trim($_POST["create_login"])));
    $cleanedPwd = htmlspecialchars(strip_tags(trim($_POST["create_pwd"])));
    
    $createLogin = createLogin($db, $cleanedLogin, $cleanedPwd);
    
}


$getAllUserNames = getAllUsers($db);


