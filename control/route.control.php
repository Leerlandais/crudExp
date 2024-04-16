<?php

if(isset($_GET["page"])) {
    switch($_GET["page"]) {
        case "home" :
            $title = "Home Page";
            include("../view/home.view.php");
            break;
        case 'login' :
            $title = "Log In Here";
            include ("../view/login.view.php");
            break;
        case "unlog" :
            include ("../model/unlog.model.php");
            break;
        case "cont_user" :
            $title = 'Change User Level';
            include ("../view/usercont.view.php");
            break;                                  
        default :
            $title = "Can't find that page";
            include("../view/error404.view.php");         
    }
    }else {
        $title = "Home Page via bad link";
        include("../view/home.view.php");
    }


