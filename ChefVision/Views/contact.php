<?php
require_once 'header.php';
require_once '../Model/Database.php';
require_once '../Model/Recipe.php';

if (isset($_POST['contactUs'])) {

    $name_err = $email_err = $msg_err = "";
    $name = $email =$message = "";

    //get values from form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //validation to check name
    if ($name == "") {
        $name_err = "Please enter your name";
    } else {
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $name_err = "Only letters and white space allowed";
        }
    }

    //validation to check email address
    if ($email == "") {
        $email_err = " Please enter email";
    } elseif (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $email_err = " Please enter valid email";
    }

    //validation to check message
    if ($message == "") {
        $msg_err = "Please enter your message";
    }

    if(!$name_err && !$email_err && !$msg_err){
            $db = Database::getDb();
            $c = new Contact();
            $s = $c->addMessage($name, $email, $message, $db);
            if ($s) {
                echo "Message added";
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
            <form  class="needs-validation" method="post" name="form" novalidate>
                <div class="card border-custom rounded-0">
                    <div class="card-header p-0">
                        <div class="bg-info-custom text-white text-center py-2">
                            <h3 class="form-title"> Contact Us</h3>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <!--Body-->
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                </div>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="<?= isset($name) ? $name : ''; ?>" required>
                                <span><?= isset($name_err)? $name_err: ''; ?></span>
                                <div class="invalid-feedback">
                                    Please enter your name
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                </div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="navpreet36@gmail.com" value="<?= isset($email) ? $email : ''; ?>" required>
                                <span><?= isset($email_err)? $email_err: ''; ?></span>
                                <div class="invalid-feedback">
                                   Please enter your valid email
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text msg"><i class="fa fa-comment text-info"></i></div>
                                </div>
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your message" required><?= isset($message)? $message : ''; ?></textarea>
                                <span><?= isset($msg_err)? $msg_err: ''; ?></span>
                                <div class="invalid-feedback">
                                    Please type your message
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Submit" id="btn" name="contactUs" class="btn btn-info btn-block rounded-custom py-2">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
<?php
require_once 'footer.php';
?>
