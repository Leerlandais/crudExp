<?php
session_start();
if(!isset($_SESSION['monID']) || 
$_SESSION['monID']!== session_id())
{
    header("Location: ?page=login");
    exit();
}

if($_SESSION["userLVL"] != 8) {
    header("Location: ?page=home");
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
    <h1>Bienvenue <?=$_SESSION["name"]?></h1>
    <h3>Ici, vous pouvez modifier les droits des utilisateurs ou les supprimer complètement</h3>
    <form action="./" method="POST">
        <ul>
    <?php
            foreach ($getAllUserNames as $user) {
        ?>
            <li><?=$user["nom_user"]?></li><input type="number" name="userid<?=$user["id_user"]?>" placeholder="<?=$user["lvl_user"]?>">
        <?php
}
    ?>
    </ul>
    </form>
<?php
        include("inc/footer.php");
    ?>
</body>
</html>