<?php
require_once 'header.php';
require_once '../Model/Database.php';
require_once '../Model/Recipe.php';
require_once 'add_comment.php';

if(!isset($_SESSION))
{
    session_start();
}

date_default_timezone_set("America/Toronto");
$userIdLogged = $_SESSION['loggedUserId'];
$id = $_GET['id'];
$title = $image = $ingredients = $description = $prepTime = $cookTime = $firstName = $lastName = $date = "";
$name = $email = $message = "";

$db = Database::getDb();
$s = new Recipe();
$userRecipe = $s->getRecipesByUser($db);

foreach ($userRecipe as $recipe){
    if ($id == $recipe['id']){
        $title = $recipe['title'];
        $image = $recipe['image'];
        $ingredients = $recipe['ingredients'];
        $description = $recipe['description'];
        $prepTime = $recipe['prep_time'];
        $cookTime = $recipe['cook_time'];
        $firstName = $recipe['first_name'];
        $lastName = $recipe['last_name'];
        $date = $recipe['date_time'];
        $recipesId = $recipe['id'];
    }
}

$userComments = $s->getAllComments($db);

?>

<!-- Page Content -->
<div class="blog-single gray-bg">
    <div class="page_container">
        <!-- Recipe Section-->
        <div class="row align-items-start">
            <div class="col-lg-12 m-15px-tb">
                <article class="recipe">
                    <h2><?= $title ?></h2>
                    <div class="recipe-img">
                        <img src="Uploads/<?= $image; ?>" title="" alt="">
                    </div>
                    <div class="recipe-description">
                        <h3>Ingredients:</h3>
                       <p class="recipe-description text-align"><?= $ingredients ?></p>
                    </br>
                        <h3>Description</h3>
                        <p class="recipe-description text-align"><?= $description ?></p>
                    </div></br>
                    <div>
                        <p class="recipe-time"><b>Prep Time:</b> <?= $prepTime ?></p>
                        <p class="recipe-time"><b>Cooking Time:</b> <?= $cookTime ?></p>
                    </div>
                    <div class="recipe-title">
                        <div class="media">
                            <div class="avatar">
                                <img class="avatar-image" src="../Library/male-profile-avatar-with-brown-hair-vector-12055105.jpg" title="" alt="">
                            </div>
                            <div class="media-body">
                                <label>Posted By: <?= $firstName." ".$lastName ?></label>
                                <span><?= $date ?></span>
                            </div>
                        </div>
                    </div>


                   <!-- Comment section-->
                    <div class="container mt-12">
                        <div>
                            <h3>Add Your Review</h3>
                        </div>
                        <?php foreach ($userComments as $userComment){ ?>
                            <?php if($id == $userComment['id']) {?>
                        <div class="d-flex justify-content-center row">
                            <div class="col-md-12">
                                <div class="d-flex flex-column comment-section">
                                    <div class="bg-white p-2">
                                        <div class="recipe-title">
                                            <div class="bg-white p-2">
                                                <div class="d-flex flex-row user-info"><img class="avatar-image rounded-circle" src="../Library/blank-profile-picture-973460_1280.png" width="40">
                                                    <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name"><?=  $userComment['first_name']." ".$userComment['last_name'] ?></span><span class="date text-black-50"><?= $userComment['date_time'] ?></span></div>
                                                </div>
                                                <div class="mt-2 col-md-8">
                                                    <p class="comment-text  recipe-description text-align"><?= $userComment['comment'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white">
                                        <div class="d-flex flex-row fs-12">
                                            <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
                                            <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>
                                            <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </article>

                <!--Write comment Section-->
                <div class="contact-form recipe-comment">
                    <h4>Leave a Comment</h4>
                    <form id="contact-form" class="needs-validation" method="POST" novalidate>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" placeholder="Your message *" rows="4" class="form-control" required></textarea>
                                    <div class="invalid-feedback">
                                        Please enter your message here.
                                    </div>
                                    <span><?= isset($msgErr)? $msgErr: ''; ?></span>
                                </div>
                            </div>
                            <div class="col-md-12-btn">
                                <div class="text-center">
                                    <input type="submit" value="Submit" id="btn" name="contactUs" class="btn btn-info btn-comment">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once 'footer.php';
?>
