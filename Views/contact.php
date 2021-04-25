<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'header.php';
require_once '../Model/Database.php';
require_once '../Model/Recipe.php';
require 'vendor/autoload.php';

if (isset($_POST['contactUs'])) {

    $nameErr = $emailErr = $msgErr = "";
    $name = $email = $message = "";

    //get values from form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Validations to check empty fields and pattern match
    if ($name == "") {
        $nameErr = "Please enter your name";
    }

    if ($email == "") {
        $emailErr = " Please enter email";
    } elseif (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $emailErr = " Please enter valid email";
    }

    if ($message == "") {
        $msgErr = "Please enter your message";
    }

    if (!$nameErr && !$emailErr && !$msgErr) {
        $db = Database::getDb();
        $c = new Recipe();
        $s = $c->addMessage($name, $email, $message, $db);
        if ($s) {
            header('Location: thanks_msg.php');
        } else {
            echo "Message not added";
        }
    }

    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'chefsvision123@gmail.com';                     //SMTP username
        $mail->Password   = 'chefs@123';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('chefsvision123@gmail.com', "Chef's Vision");
        $mail->addAddress($email, 'Navpreet Kaur');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Team - Chef's Vision";
        $mail->Body    = 'Thanks for contacting us.We will reply you back soon within 2 business days.';

        $mail->send();
    } catch (Exception $e) {
        echo "";
    }
}
?>


<div class="page_container">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">
            <form  action=" " class="needs-validation" method="post" name="form" novalidate>
                <div class="card border-custom rounded-0">
                    <div class="card-header p-0">
                        <div class="bg-info-custom text-white text-center py-2">
                            <h3 class="form-title"> Contact Us</h3>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                </div>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="<?= isset($name) ? $name : ''; ?>" required>
                                <span><?= isset($nameErr)? $nameErr: ''; ?></span>
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
                                <span><?= isset($emailErr)? $emailErr: ''; ?></span>
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
                                <span><?= isset($msgErr)? $msgErr: ''; ?></span>
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


<?php
//use Contactus\Model\{Contact, Database};
//
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;
//
//require 'vendor/autoload.php';
//
//require_once './Model/Database.php';
//require_once './Model/Contact.php';
//
//if(isset($_POST['submit'])){
//
//    $firstnameerr = $lastnameerr =  $emailerr = $feedbackerr =  $messageerr = "";
//
//    $firstname = $lastname =  $email = $feedback =  $message = "";
//
//
//    $firstname = $_POST['first-name'];
//    $lastname = $_POST['last-name'];
//    $email = $_POST['email'];
//    $feedback = $_POST['feedback'];
//    $message = $_POST['message'];
//
//    if($firstname == ""){
//        $firstnameerr = "Please enter first name";
//    }
//
//    if($lastname == ""){
//        $lastnameerr = "Please enter last name";
//    }
//    if($email == ""){
//        $emailerr = "Please enter email";
//    } elseif (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
//        $emailerr = "Please enter valid email";
//    }
//    if($feedback == ""){
//        $feedbackerr = "Please enter subject";
//    }
//    if($message == ""){
//        $messageerr = "Please enter your message";
//    }
//    if (!$firstnameerr && !$lastnameerr && !$emailerr && !$feedbackerr &&  !$messageerr) {
//        $db =Database::getDb();
//        $s = new Contact();
//        $c = $s->addContact($firstname, $lastname, $email,$feedback,$message, $db);
//
//        if($c){
//            header ("Location: success.php");
//        } else {
//            echo "errors";
//        }
//    }
//
//    $mail = new PHPMailer(true);
//
//    try {
//        //Server settings
//        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//        $mail->isSMTP();                                            //Send using SMTP
//        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
//        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//        $mail->Username   = 'justprint1233@gmail.com';                     //SMTP username
//        $mail->Password   = 'Simran@123';                               //SMTP password
//        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
//        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
//
//        //Recipients
//        $mail->setFrom('justprint1233@gmail.com', 'Just Print');
//        $mail->addAddress($email, 'simranjeet singh');     //Add a recipient
//
//        //Content
//        $mail->isHTML(true);                                  //Set email format to HTML
//        $mail->Subject = 'Team - Just Print';
//        $mail->Body    = 'Thanks for contacting us.We will reply you back soon within 5-7 business days.';
//
//        $mail->send();
//        // echo 'Message has been sent';
//    } catch (Exception $e) {
//        echo "";
//    }
//}
