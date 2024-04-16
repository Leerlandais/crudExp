<p>Header</p>
<nav>
    <ul>
<?php
if(isset($_SESSION['monID']) &&
$_SESSION['monID']=== session_id())
{
  if (isset($_SESSION)) {
    if($_SESSION['userLVL'] === 0) {
    ?>

    <a href="?page=unlog"><li>Disconnect</li></a>
    <?php
    }else if ($_SESSION["userLVL"] === 1) {
        ?>
    <a href="?page=add_art"><li>Ajouter Un Article</li></a>
    <a href="?page=unlog"><li>Disconnect</li></a>    
        <?php
    }else if ($_SESSION["userLVL"] === 2) {
        ?>
        <a href="?page=add_art"><li>Ajouter Un Article</li></a>
        <a href="?page=check_art"><li>Verifie des Article</li></a>
        <a href="?page=unlog"><li>Disconnect</li></a>    
            <?php
    }else if ($_SESSION["userLVL"] === 8) {
        ?>
        <a href="?page=add_art"><li>Ajouter Un Article</li></a>
        <a href="?page=check_art"><li>Verifie des Article</li></a>
        <a href="?page=del_art"><li>Efface des Article</li></a>
        <a href="?page=cont_user"><li>User Control</li></a>
        <a href="?page=unlog"><li>Disconnect</li></a>    
            <?php
    }
}
}
    ?>
</ul>
</nav>