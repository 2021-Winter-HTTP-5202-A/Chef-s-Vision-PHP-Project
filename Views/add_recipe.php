<?php
include 'header.php';
require_once '../Model/Database.php';
require_once '../Model/Recipe.php';
require_once 'process_upload.php';
?>


<!--<script src="javas/addRec.js"></script>-->
<div class="page_container">
    <div class="container">
        <div class="recipe_heading">
            <h2>Add Your Recipe Here</h2>
        </div>
        <form class="needs-validation" name="recipe-form" enctype="multipart/form-data" action=" " method="POST" novalidate>
            <div class="form-group">
                <label for="title">Recipe name:</label>
                <input class="form-control" type="text" id="title" name="title" value="<?= isset($title) ? $title : ''; ?>" required>
                <div class="invalid-feedback">
                    Please enter name of your recipe.
                </div>
            </div>
            <span><?= isset($titleErr)? $titleErr: ''; ?></span>

            <div class="form-group image-upload">
                <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                <label for="uploadFile" class="form-label">Select Image:</label>
                <input class="form-control" type="file" id="uploadFile" name="uploadFile" required><br>
                <div class="invalid-feedback">
                    Please Choose image of your recipe.
                </div>
            </div>

            <div class="form-group">
                <label for="ingredients" class="form-label">Ingredients:</label>
                <input class="form-control" type="text" id="ingredients" name="ingredients" required>
                <div class="invalid-feedback">
                    Please enter ingredients.
                </div>
            </div>

            <div class="form-group">
                <label for="prepTime" class="form-label">Preparation Time</label>
                <input class="form-control" type="text" id="prepTime" name="prepTime" required>
                <div class="invalid-feedback">
                    Please enter preparation time.
                </div>
            </div>

            <div class="form-group">
                <label for="cookingTime" class="form-label">Cooking Time:</label>
                <input class="form-control" type="text" id="cookingTime" name="cookingTime" required>
                <div class="invalid-feedback">
                    Please enter cooking time.
                </div>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" type="textarea" rows="10" cols="5" id="description" name="description" required></textarea>
                <div class="invalid-feedback">
                    Please enter description of your recipe.
                </div>
            </div>

            <div class="text-center">
                <input type="submit" value="Submit" id="recipe-btn" name="addRecipe" class="btn btn-info btn-block rounded-custom py-2">
            </div>
        </form>
    </div>
</div>

<?php
include 'footer.php'
?>
