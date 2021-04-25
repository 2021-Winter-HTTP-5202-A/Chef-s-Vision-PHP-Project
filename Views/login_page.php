<?php
require_once 'header.php';
require_once '../Model/Database.php';
require_once '../Model/Recipe.php';

$username_err = $pass_err = "";
$username = $password = "";

if(isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    //Validations to check empty fields and pattern match
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

    if (!$username_err && !$pass_err) {
        $db = Database::getDb();
        $c = new Recipe();
        $users = $c->getAllUsers($db);
        if (!isset($_SESSION)) {
            session_start();
        }
        foreach ($users as $value) {
            if ($username == $value['username'] && $password == $value['password']) {
                $_SESSION['username'] = $username;
                $_SESSION['loggedUserId'] = $value['id'];
                $_SESSION['firstName'] = $value['first_name'];
                $_SESSION['lastName'] = $value['last_name'];

                header('Location: index.php');
            } else {
                $error_msg = "Please enter valid username or password";
            }
        }
    }
}
?>

<div class="page_container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-5 pb-5">
                <form action="#" method="post" name="form">
                    <div class="card border-custom rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-info-custom text-white text-center py-2">
                                <h3 class="form-title"> Login</h3>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= isset($username) ? $username : ''; ?>">
                                </div>
                                <span><?= isset($username_err)? $username_err: ''; ?></span>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?= isset($password) ? $password : ''; ?>">
                                </div>
                            </div>
                            <span><?= isset($pass_err)? $pass_err: ''; ?></span>
                            <div class="form-error"><?= isset($error_msg)? $error_msg: ''; ?></div>
                            <div class="text-center">
                                <input type="submit" value="Login" id="btn-login" name="login" class="btn btn-info btn-block rounded-custom py-2">
                            </div>
                        </div>
                        <p class="account"><a href="signUp_page.php">Don't have an Account? Register here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
require_once 'footer.php';
?>
      