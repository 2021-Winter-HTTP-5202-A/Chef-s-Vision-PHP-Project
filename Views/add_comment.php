<?php

require_once '../Model/Database.php';
require_once '../Model/Recipe.php';

if(!isset($_SESSION))
{
    session_start();
}
date_default_timezone_set("America/Toronto");
$userIdLogged = $_SESSION['loggedUserId'];
$recipesId = $_GET['id'];

if (isset($_POST['contactUs'])) {

    $nameErr = $emailErr = $msgErr = "";
    $name = $email = $message = "";

    $comment = $_POST['message'];
    $dateTime = date('Y-m-d h:i:s');
    $userId = $userIdLogged;
    $recipeId = $recipesId;

    if ($comment == "") {
        $msgErr = "Please enter your message";
    }

    if (!$nameErr) {
        $db = Database::getDb();
        $s = new Recipe();
        $comment = $s->addComment($userId, $recipeId, $comment, $dateTime, $db);
        if ($comment) {
            echo "";
            $_POST = array();
        } else {
            echo "Message not added";
        }
    }

}