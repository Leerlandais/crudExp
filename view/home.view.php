<?php

session_start();
if(!isset($_SESSION['monID']) || 
$_SESSION['monID']!== session_id())
{
    header("location: ?page=login");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/style.css">
        <title><?=$title?></title>
    </head>
    <body>
        <?php
        include("inc/header.php");
        if (isset($errorMessage)) : echo $errorMessage; endif;

    ?>
<h1>made it this far</h1>
<h2>Welcome <?=$_SESSION["name"]?></h2>
<?php 
    switch($_SESSION["userLVL"]) {
        case "0" : ?>
            <p>You only have read rights</p>
<?php   
        break;
        case "1" : ?>
            <p>You can create articles but they need to be verified</p>
<?php   
        break;
        case "2" : ?>
            <p>You can create and verify articles</p>
<?php   
        break;
        case "8" : ?>
            <p>You have full access</p>
<?php   
        }
        include("inc/footer.php");
    ?>
</body>
</html>