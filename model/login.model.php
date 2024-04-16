<?php


function attemptLogin(PDO $db, $name, $pwd) {
    $getAllUserNames = getAllUsers($db);

    $allGood = 0;

foreach($getAllUserNames as $check) {
    if($name === $check["nom_user"] && $pwd === $check["pwd_user"]){
        $allGood++;
    }
    
}
    if($allGood > 0) {
        $_SESSION['monID'] = session_id();
        $_SESSION['name'] = $check["nom_user"];
        $_SESSION["userLVL"] = $check['lvl_user'];
        header("Location: ?page=home");        
    }else {
        echo("no luck");
}

}



