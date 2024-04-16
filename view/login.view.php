<?php
session_start();

if(isset($_SESSION['monID']) &&
    $_SESSION['monID']=== session_id())
    {
        header("location: ?p=home");
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
<h1>Login</h1>
<p>Veuillez vous connecter</p>
    <?php if(isset($erreur)) echo "<h3>$erreur</h3>" ?>
    <form action="" name="login" method="POST">
        <input type="text" name="login" placeholder="username" required><br>
        <input type="password" name="pwd" placeholder="password" required><br>
        <input type="submit" value="Se connecter">
    </form>
    <p>Ou cliquez <a href="?page=login&mode=add">ici</a> pour créer un login</p>
    <?php
    if(isset($_GET["mode"]) && $_GET["mode"] === "add") {
        ?>
        <h5>Créez votre login</h5>
        <form action="" name="create_login" id="createForm" method="POST">
        <input type="text" name="create_login" placeholder="username" id="createLogin" required><br>
        <input type="password" name="create_pwd" placeholder="password" id="createPwd" required><br>
        <input type="password" name="confirm_pwd" placeholder="password" id="confirmPwd" required><br>
        <input type="submit" id="createSubmit" value="Créer un compte">
    </form>
        <?php
    }
        include("inc/footer.php");
    ?>
    <script src="../public/scripts/create_script.js"></script>
</body>
</html>
