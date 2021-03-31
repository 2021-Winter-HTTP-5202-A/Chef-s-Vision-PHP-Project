<?php
//require_once './model/Database.php';
include 'header.php';
//require_once 'userAdd.php' ;

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

                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">

                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">

                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">

                                        <input type="password" class="form-control" id="con_password" name="con_password" placeholder="Confirmed Password" required>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Sign Up" id="btn-signup" name="contactUs" class="btn btn-info btn-block rounded-custom py-2">
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