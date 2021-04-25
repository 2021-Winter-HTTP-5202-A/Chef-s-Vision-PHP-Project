<?php

function emptyInputChecker($value){
    $result;
    if(empty($value)){
        $result = false;
    } else{
        $result = true;
    }
    return $result;
}

function invalidEmail($value){
    $result;
    if(filter_var($value, FILTER_VALIDATE_EMAIL) ){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUsername($value){
    if(!preg_match("/^[a-zA-Z0-9]*$/", $value )){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}


function passwordMatch($password, $con_password){
    $result;
    if($password !== $con_password ){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function uidExists($username, $email, $db){
    $sql = "SELECT * FROM users WHERE id = :id OR email = :email;";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);

    $count = $stmt->execute();
    return $count;

}