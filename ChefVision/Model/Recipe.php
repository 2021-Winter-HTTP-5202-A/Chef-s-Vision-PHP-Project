<?php

class Contact{
    public function addMessage($name, $email, $message, $db){
        $sql = "INSERT INTO contact_us(name, email, message)
              VALUES (:name, :email, :message) ";

        //prepare query
        $stmt = $db->prepare($sql);

        //bind query
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message',$message);

        $count = $stmt->execute();
        return $count;
    }

}
