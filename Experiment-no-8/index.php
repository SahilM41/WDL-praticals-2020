<?php
include 'connect.php';
$current_email = "";
$userEmail = "";
// session_start();

if (!isset($_SESSION['email'])) {

    $current_email = "Default-User";
} else {
    $userEmail = $_SESSION['email'];
    $current_email = $userEmail;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Itim&display=swap" rel="stylesheet">
    <title>Home-Page</title>
</head>
<body>
     
        
        <?php
        include 'navbar.php';
        ?>
        
        <div class=" custom">
          
            <div class="card mb-3 dimen">
                <div class="img">
                    <img class="card-img-top" src="./images/Basket.jpeg"  alt="Card image cap">
                </div>
                <div class="card-body">
               
                  <h3 style="font-family: 'Itim', sans-serif;">Up-To <strong>30%</strong> OFF on all items for our new customers.</h3>
                  <p class="card-text">Buy Grocery items, including Daily Essentials online and get it delivered at your doorstep.</p>
                  <h4 >Orders above 150 Rupees will be delivered home absolutely free!</h4>
                  <p class="card-text "><small class="text-muted">Prices of all items are displayed on the site are inclusive of taxes*.</small></p>
                </div>
            </div>
          </div>
        </div>

        <div class="mainBox" >
          <div class="container ">
            
            <div class="text-white textContent col-md-11  pt-0">
              <h3>Get all grocery-items starting from daily essentials to snacks and dairy products too..</h3>
              
              <p class="pt-2">
                <i>One of the <strong>best</strong> resource packed store in the locality,</i>
              </p>
              
              <h5>Buy everything Fresh and stay Healthy.</h5>
             

              <div class="row pt-3">
                <span class="col-3"><strong>Fruit-Juice</strong></span>
                <span class="col-3"><strong>Chips</strong></span>
                <span class="col-3"><strong>Dry-Fruits</strong></span>
              </div>
              <div class="row pt-3 pr-1">
                <span class="col-3"><a href="<?php
                                      if (!isset($_SESSION['id'])) {
                                        echo 'login.php';
                                      } else {
                                        echo 'store.php';
                                      }

                                      ?>" class="btn btn-dark">Buy Now</a>
                </span>                      
                <span class="col-3"><a href="<?php
                                      if (!isset($_SESSION['id'])) {
                                        echo 'login.php';
                                      } else {
                                        echo 'store.php';
                                      }

                                      ?>" class="btn btn-dark">Buy Now</a>
                </span>


                <span class="col-3"><a href="<?php
                                      if (!isset($_SESSION['id'])) {
                                        echo 'login.php';
                                      } else {
                                        echo 'store.php';
                                      }

                                      ?>" class="btn btn-dark">Buy Now</a>
                </span>
                
              </div>
              
            </div>
            
            
  
          </div>
        </div>
        <div class="features">
          <div class="container pt-4">
            <div class="col-md-12">
            <h2>Services Offered by Us.</h2>
              <div class="card cardContent card border border-primary mt-3 mb-5">
                <div class="col-md-3 bg-light d-flex justify-content-center border-primary"><img src="./Svg/truck.svg" width="90px"/></div>
                <div class="card-body">
                  <h5 class="card-title">Free Delivery and returns</h5>
                  <p class="card-text">Get your order delivered free on your door-step, if billing of order exceeds 150 Rupees.
                  Not satisfied with our products, No Worries just return back the products within 5 days of delivery to us. </p>
                  
                </div>
              </div>
              <div class="card cardContent card border border-danger mb-5">
                <div class="col-md-3 bg-light d-flex justify-content-center border-primary"><img src="./Svg/sale.svg" width="90px"/></div>
                <div class="card-body">
                  <h5 class="card-title">Sale UpTo 30% OFF.</h5>
                  <p class="card-text">If you are new here, Welcome and Grab an opportunity to get 30% off on all your Grocery products purchased online.</p>
                  
                </div>
              </div>
              <div class="card cardContent card border border-success mb-3">
                <div class="col-md-3 bg-light d-flex justify-content-center border-primary"><img src="./Svg/satisfaction.svg" width="90px"/></div>
                <div class="card-body">
                  <h5 class="card-title">Customer Satisfaction.</h5>
                  <p class="card-text">We Believe that our Customers should get products what they deserve in return to the payment made,
                     So we at our Store sell Genuine and Fresh products to our Customers to build more and maintain Customer Satisfaction.</p>
                  
                </div>
              </div>
              </div>
          </div>

        </div>
        <!-- Footer-Starts -->
        <div class="footer container-fluid">
          
          <div class="details col-md-3 ">
              <p ><img src="./Svg/gmail.svg"/> Email: Test@gmail.com </p>
              
              <p> <img src="./Svg/phone.svg"/>Phone: +65 11 188 888</p>
              
          </div>
          
            
              
              <div class="shop col-md-5 ">
                
                <div >

                  <a href="#"> About-Us</a>
                  <br/>
                  <a href="#">About Our Shop</a>
                  <br/>
                  <a href="#">Secure-Shopping</a>
                </div>
                
            
                <div class="ml-3">
                  <a href="#"> Services</a>
                  <br/>
                  <a href="#">Projects</a>
                  <br/>
                  <a href="#">Contact</a>
                </div>
              </div>
              <div class="follow col-md-3">
                <p>Follow-Us</p>
                <div class="icons">
                  <img src="./Svg/twitter (1).svg" class="mr-2"/>
                  <img src="./Svg/linkedin.svg" class="mr-2"/>
                  <img src="./Svg/instagram-sketched.svg"/>
                </div>
              </div>
              
         
        </div>
          <div class="container-fluid mr-0 ml-0 pl-0 pr-0">
            <div class="col-md-12 cpyRight">
              <img class="copy mr-1" src="./Svg/copyright.svg"/>
              <span>2020<strong> E-Commerce Store.</strong></span>
            </div>
            
          </div>
          

        <script src="js/carousel.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
</body>
</html>
