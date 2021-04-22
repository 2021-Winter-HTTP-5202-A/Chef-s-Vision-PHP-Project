<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chef's Vision</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap stylesheet -->
    <link href="../Styles/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link href="../Styles/css/custom.css" rel="stylesheet">

    <!--Custom StyleSheets-->
    <link href ="../Styles/styleSheet.css" rel="stylesheet">
    <link href ="../Styles/IndexStyle.css" rel="stylesheet">
    <link href ="../Styles/RecipeStyle.css" rel="stylesheet">
    <link href ="../Styles/RecipeDetail.css" rel="stylesheet">
    <link href ="../Styles/ContactStyle.css" rel="stylesheet">
    <link href ="../Styles/LoginStyle.css" rel="stylesheet">
    <link href ="../Styles/EventStyle.css" rel="stylesheet">
    <link href ="../Styles/AboutStyle.css" rel="stylesheet">
    <link href ="../Styles/FlexSlider.css" rel="stylesheet">
    <link href ="../Styles/ThanksStyle.css" rel="stylesheet">


    <!--bootstrap Javascript-->
    <script src="../JavaScript/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/34cfee3006.js" crossorigin="anonymous"></script>
</head>

<body>
     <header class="header">
         <div class="page_container">
             <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
                 <div class="container-fluid">
                     <a class="navbar-brand" href="#">
                         <p class="site-logo">Chef's Vision</p>
                     </a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                             <li class="nav-item">
                                 <a class="nav-link" aria-current="page" href="index.php">Home</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="AboutUs.php">About</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="recipe.php">Recipes</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="events.php">Events</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                             </li>
                             <?php
                             session_start();
                             if (isset($_SESSION['username'])){
                                 echo '<li class="nav-item">
                                           <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                        </li>';
                             } else {
                                 echo '<li class="nav-item" id="sign-In">
                                           <a class="nav-link" href="signUp_page.php"><i class="fas fa-user"></i> Sign Up</a>
                                       </li>
                                       <li class="nav-item">
                                       <a class="nav-link" href="login_page.php"><i class="fas fa-sign-in-alt"></i> Login</a>
                                       </li>';
                             }
                             ?>
                        </ul>
                     </div>
                 </div>
             </nav>
         </div>
     </header>
     <hr>




    
    
    
    
    


