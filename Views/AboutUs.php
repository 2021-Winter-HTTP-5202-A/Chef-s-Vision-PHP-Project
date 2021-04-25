
<?php
require_once 'header.php';

if(!isset($_SESSION['username']))
{
    header('Location: login_page.php');
}
?>
  
<section>
    <div class="page_container">
        <div class="container">
    <div class="row top-slider">

        <div class="flexslider teaser">
            <ul class="slides">
              <li>
                <div class="product-content hidden-phone slide1">
                  <h2 class="gray">We are <span class="red bold">Chef's Vision.</span> A place where anyone can share their recipes.</h2></div>
                <div class="product-img slide1"><img src="../Library/aboutusimg1.jpg" alt="Ingredients" /></div>
              </li>
              <li>
                <div class="product-img slide2"><img src="../Library/aboutusimg2.jpg" alt="Ingredients" /></div>
                <div class="product-content  hidden-phone slide2"><h2 class="red">Incredible: <span class="gray bold">Recipes</span> Perfect for <span class="bold">anyone and everyone.</span></h2>
                </div>
              </li>
            </ul>
        </div>

    </div><!-- /top-slider -->
        </div>
    </div>
   
    </section>




    <!-- javascript
    ================================================== -->

    <script src="../JavaScript/jquery-1.9.1.min.js"></script>
    <script src="../JavaScript/jquery.flexslider-min.js"></script>
    <script src="../JavaScript/bootstrap.min.js"></script>
    <script src="../JavaScript/custom.js"></script>
    

<?php
 require_once 'footer.php';
?>