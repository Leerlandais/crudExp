<?php

session_start();
if (isset($errorMessage)) : echo $errorMessage; endif;
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
    ?>

    <?php
        include("inc/footer.php");
    ?>
</body>
</html>