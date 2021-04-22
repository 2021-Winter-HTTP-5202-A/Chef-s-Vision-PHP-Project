<?php
require_once 'header.php';
require_once '../Model/Database.php';
require_once '../Model/Recipe.php';

if(!isset($_SESSION['username']))
{
    header('Location: login_page.php');
}

$db = Database::getDb();
$s = new Recipe();
$recipes = $s->getAllRecipes($db);
?>


<div class="page_container">
    <div class="container">
        <div class="recipe_heading">
            <h2>Make Your Own Food</h2>
        </div>
        <div class="text-center">
            <a href="add_recipe.php"><input type="submit" value="Add Your Recipe Here" id="btn" name="contactUs" class="btn btn-info btn-block rounded-custom py-2"></a>
        </div>

        <div class="recipe_area plus_padding">
            <div class="row">
                <?php foreach ($recipes as $recipe){ ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_recipe text-center">
                        <div class="recipe_thumb">
                            <img class="recipe_image" src="Uploads/<?= $recipe['image']; ?>" alt="">
                        </div>
                        <h3><?= $recipe['title']; ?></h3>
                        <p>Cooking Time: <?= $recipe['cook_time'] ?></p>
                        <a href="recipe_detail.php?id=<?= $recipe['id'] ?>" class="line_btn">View Full Recipe</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


<?php
require_once 'footer.php';
?>