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

