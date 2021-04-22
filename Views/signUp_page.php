<?php
include 'header.php';
require_once '../Model/Database.php';
require_once '../Model/Recipe.php';

$fName_err = $lName_err = $email_err = $username_err = $pass_err = $conPass_err = "";

if(isset($_POST['signup'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $con_password = $_POST['con_password'];

    //Validations to check empty fields and pattern match
    if ($firstname == "") {
        $fName_err = "Please enter your first name";
    } else {
        if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
            $fName_err = "Only letters and white space allowed";
        }
    }

    if ($lastname == "") {
        $lName_err = "Please enter your last name";
    } else {
        if (!preg_match("/^[a-zA-Z]*$/", $lastname)) {
            $lName_err = "Only letters and white space allowed";
        }
    }

    if ($email == "") {
        $email_err = " Please enter email";
    } elseif (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $email_err = " Please enter valid email";
    }

    if ($username == "") {
        $username_err = "Please enter username";
    } else {
        if (!preg_match("/^[a-zA-Z]*$/", $username)) {
            $username_err = "Only letters and white space allowed";
        }
    }

    if ($password == "") {
        $pass_err = "Please enter password ";
    }

    if ($con_password == "") {
        $conPass_err = "Please re-enter your password ";
    } elseif ($con_password !== $password) {
        $conPass_err = "Password doesn't match";
    }

    if (!$fName_err && !$lName_err && !$email_err && !$username_err && !$pass_err && !$conPass_err) {
        $db = Database::getDb();
        $c = new Recipe();
        $s = $c->signUp($firstname, $lastname, $email, $username, $password, $db);
        if ($s) {
            header('Location:login_page.php');
            $_POST = array();
        } else {
            echo "Message not added";
        }
    }
}

?>


    <div class="page_container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 pb-5">
                    <form action="#" method="post" name="form">
                        <div class="card border-custom rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info-custom text-white text-center py-2">
                                    <h3 class="form-title"> Sign Up</h3>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" value="<?= isset($firstname) ? $firstname : ''; ?>">
                                    </div>
                                    <span><?= isset($fName_err)? $fName_err: ''; ?></span>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" value="<?= isset($lastname) ? $lastname : ''; ?>">
                                    </div>
                                    <span><?= isset($lName_err)? $lName_err: ''; ?></span>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= isset($email) ? $email : ''; ?>" >
                                    </div>
                                    <span><?= isset($email_err)? $email_err: ''; ?></span>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <input type="input" class="form-control" id="username" name="username" placeholder="Username" value="<?= isset($username) ? $username : ''; ?>">
                                    </div>
                                    <span><?= isset($username_err)? $username_err: ''; ?></span>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?= isset($password) ? $password : ''; ?>">
                                    </div>
                                    <span><?= isset($pass_err)? $pass_err: ''; ?></span>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <input type="password" class="form-control" id="con_password" name="con_password" placeholder="Confirmed Password" value="<?= isset($con_password) ? $con_password : ''; ?>" >
                                    </div>
                                    <span><?= isset($conPass_err)? $conPass_err: ''; ?></span>
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Sign Up" id="btn-signup" name="signup" class="btn btn-info btn-block rounded-custom py-2">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php

include 'footer.php';
?>