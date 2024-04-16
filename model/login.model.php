<?php	


function getAllUsers(PDO $db) {
    $sql = "SELECT * 
            FROM user_info";

try{
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}catch(Exception) {
    $result = "Sorry, couldn't get user info";
    return $result;
}
}

function createLogin(PDO $db, $names, $pwd) {
    $getAllUserNames = getAllUsers($db);
    foreach($getAllUserNames as $check) {

        if ($names == $check["nom_user"]) {
            $errorMessage = "Username already exists";
      
            return $errorMessage;
        }
        }

            $sql = "INSERT INTO `user_info`(`id_user`, `nom_user`, `pwd_user`, `lvl_user`) VALUES (NULL,?,?,'0')";
            $stmt = $db->prepare($sql);
            $stmt->bindValue(1, $names);
            $stmt->bindValue(2, $pwd);
            try {
                $stmt->execute();
                $db->commit();
                return true;
            } catch (Exception $e) {
                error_log("Error adding User: " . $e->getMessage());
                
    }
}

function attemptLogin(PDO $db, $name, $pwd) {
    $getAllUserNames = getAllUsers($db);

    $allGood = 0;

foreach($getAllUserNames as $check) {
    if($name === $check["nom_user"] && $pwd === $check["pwd_user"]){
        $allGood++;
        break;
    }
    
}
    if($allGood > 0) {
        $_SESSION['monID'] = session_id();
        $_SESSION['name'] = $check["nom_user"];
        $_SESSION["userLVL"] = $check['lvl_user'];
        header("Location: ?page=home");        
    }else {
        $errorMessage = "Something went wrong with userLVL";
        echo $errorMessage;
    //    header ("Location: ?page=login");
    }

}

