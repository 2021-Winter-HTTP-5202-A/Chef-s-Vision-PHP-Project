<?php

class Recipe{
    //Method to add contact messages
    public function addMessage($name, $email, $message, $db){
        $sql = "INSERT INTO contact_us(name, email, message)
              VALUES (:name, :email, :message) ";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message',$message);
        $count = $stmt->execute();
        return $count;
    }

    //Method to add data from sign up Users
    public function signUp($firstname, $lastname, $email, $username, $password, $db){
        $sql = "INSERT INTO users(first_name, last_name, email, username, password)
                VALUES (:first_name, :last_name, :email, :username, :password) ";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':first_name', $firstname);
        $stmt->bindParam(':last_name', $lastname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $count = $stmt->execute();
        return $count;
    }

    //Method to get all users information
    public function getAllUsers($db){
        $sql = "SELECT * FROM users";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    //Method to add Recipe to database
    public function addRecipe($title , $image, $ingredients, $prepTime, $cookingTime, $description, $userId, $date, $db){
        $sql = "INSERT INTO `recipes`( `user_id`, `title`, `image`, `ingredients`, `description`, `prep_time`, `cook_time`, `date_time`) 
                VALUES ( :user_id, :title, :image, :ingredients, :description, :prep_time, :cook_time, :date_time)";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':ingredients', $ingredients);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':prep_time', $prepTime);
        $stmt->bindParam(':cook_time', $cookingTime);
        $stmt->bindParam(':date_time', $date);
        $count = $stmt->execute();
        return $count;
    }

    //Methode to get all recipes from database
    public function getAllRecipes($db){
        $sql = "Select * from recipes";
        $pdostm = $db-> prepare($sql);
        $pdostm->execute();
        $results = $pdostm->fetchAll(\PDO::FETCH_ASSOC);
        return $results;
    }

    //Method to get recipe added by particular user
    public function getRecipesByUser($db)
    {
        $sql = "Select users.first_name, users.last_name, recipes.id, recipes.title, recipes.image, recipes.ingredients, recipes.description, recipes.prep_time, recipes.cook_time, recipes.date_time  FROM recipes, users where users.id = recipes.user_id";
        $pdostm = $db-> prepare($sql);
        $pdostm->execute();
        $results = $pdostm->fetchAll(\PDO::FETCH_ASSOC);
        return $results;
    }

    //Method to add comments on recipe
    public function addComment( $userId, $recipeId, $comment, $dateTime,  $db){
        $sql = "INSERT INTO `recipe_comments`(`user_id`, `recipe_id`, `comment`, `date_time`)
              VALUES ( :user_id, :recipe_id, :comment, :date_time) ";

        $pdostm = $db->prepare($sql);
        $pdostm->bindParam(':user_id', $userId);
        $pdostm->bindParam(':recipe_id', $recipeId);
        $pdostm->bindParam(':comment', $comment);
        $pdostm->bindParam(':date_time', $dateTime);

        $count = $pdostm->execute();
        return $count;
    }

    //Method to display all comments from database
    public function getAllComments($db)
    {
        $sql = "SELECT users.first_name, users.last_name, recipe_comments.id, recipe_comments.comment, recipe_comments.date_time, recipes.id  FROM recipe_comments LEFT JOIN users 
                ON recipe_comments.user_id = users.id
                LEFT JOIN recipes
                ON recipe_comments.recipe_id = recipes.id";

        $pdostm = $db->prepare($sql);
        $pdostm->execute();
        $results = $pdostm->fetchAll(\PDO::FETCH_ASSOC);
        return $results;

    }
}
