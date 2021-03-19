<?php
require_once 'header.php';

if (isset($_POST['contactUs'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $user = 'root';
    $password = 'root';
    $dbname = 'recipesDb';
    $dsn = 'mysql:host=localhost;dbname=' . $dbname;

    $dbcon = new PDO($dsn, $user, $password);

    //sql query
    $sql = "INSERT INTO contact_us(name, email, message)
              VALUES (:name, :email, :message) ";

    $pdostm = $dbcon->prepare($sql);

    $pdostm->bindParam(':name', $name);
    $pdostm->bindParam(':email', $email);
    $pdostm->bindParam(':message', $message);

    $count = $pdostm->execute();
    if ($count) {
        echo "msg recieved";
    } else {
        echo "problem adding a student";
    }
}


?>

<div class="page_container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">
            <form action="#" method="post" name="form">
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
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                </div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="navpreet36@gmail.com" required></div>
                            </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text msg"><i class="fa fa-comment text-info"></i></div>
                                </div>
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your message" required></textarea>
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
<?php
require_once 'footer.php';
?>
