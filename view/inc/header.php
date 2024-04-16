<p>Header</p>
<?php
if(isset($_SESSION['monID']) &&
$_SESSION['monID']=== session_id())
{
    ?>
    <a href="?page=unlog">Disconnect</a>
    <?php
    }
    ?>