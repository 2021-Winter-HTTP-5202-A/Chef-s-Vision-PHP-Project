<?php
require_once '../Model/Database.php';

if(!isset($_SESSION))
{
    session_start();
}
$userIdLogged = $_SESSION['loggedUserId'];
date_default_timezone_set("America/Toronto");

if (isset($_POST['addRecipe'])) {
    $title = $_POST['title'];
    $image = $_FILES['uploadFile'];
    $ingredients = $_POST['ingredients'];
    $prepTime = $_POST['prepTime'];
    $cookingTime = $_POST['cookingTime'];
    $description = $_POST['description'];
    $userId = $userIdLogged;
    $date = date('Y-m-d h:i:s');

    if ($title == "") {
        $titleErr = "Please enter title of your recipe";
    }

    if (isset($_FILES['uploadFile'])) {
        //path of the file in temp directory
        $file_temp = $_FILES['uploadFile']['tmp_name'];
       //original path and file name of the uploaded file
        $file_name = $_FILES['uploadFile']['name'];
       //size of the uploaded file in bytes
        $file_size = $_FILES['uploadFile']['size'];
       //type of the file(if browser provides)
        $file_type = $_FILES['uploadFile']['type'];
        //error number
        $file_error = $_FILES['uploadFile']['error'];
        var_dump($_FILES['uploadFile']);
        if ($file_error > 0) {
           echo "Please choose image";
            switch ($file_error) {
                case 1:
                    echo "File exceeded upload_max_filesize.";
                    break;
                case 2:
                    echo "File exceeded max_file_size";
                    break;
                case 3:
                    echo "File only partially uploaded.";
                    break;
                case 4:
                    break;
            }
            exit;
        }

        $max_file_size = 200000;
        if ($file_size > $max_file_size) {
            echo "file size too big";

        }
        //folder to move the uploaded file
        $target_path = "uploads/";
        $target_path = $target_path . $_FILES['uploadFile']['name'];

       //move the uploaded file from tempe path to target path
        if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $target_path)) {
            echo "The file " . $_FILES['uploadFile']['name'] . " has been uploaded ";
        } else {
            echo "There was an error uploading the file, please try again!";
        }

        $db = Database::getDb();
        $s = new Recipe();
        $c = $s->addRecipe($title, $file_name, $ingredients, $prepTime, $cookingTime, $description, $userId, $date, $db);

        if ($c) {
            echo header('Location:recipe.php');
        } else {
            echo "problem adding a car";
        }
    }
}
