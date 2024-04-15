<?php

if(isset($_GET["page"])) {
    switch($_GET["page"]) {
        case "home" :
            $title = "Home Page";
            include("../view/home.view.php");
            break;
        case 'login' :
            $title = "Log In Here";
            include ("../view/login.php");
            break;
        case "unlog" :
            include ("../controller/unlog.control.php");
            break;                        
        default :
            $title = "Can't find that page";
            include("../view/error404.view.php");         
    }
    }else {
        $title = "Home Page via bad link";
        include("../view/home.view.php");
    }


