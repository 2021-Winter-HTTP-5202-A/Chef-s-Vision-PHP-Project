<?php
include 'header.php';
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
                            <!--Body-->
                            <div class="form-group">
                                <div class="input-group mb-2">
<!--                                    <label for="name">Username:</label>-->
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
<!--                                    <label for="password">Password:</label>-->
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required></div>
                            </div>

                            <div class="text-center">
                                <input type="submit" value="Login" id="btn-login" name="contactUs" class="btn btn-info btn-block rounded-custom py-2">
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
include 'footer.php';
?>
      