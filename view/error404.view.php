<?php
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
        <a href="?page=home"></a>
    <?php
        include("inc/footer.php");
    ?>
</body>
</html>