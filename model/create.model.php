<?php	




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

