<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/store.css">

    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <title>Store</title>

    <style>
    .addCartItem{
        color: white;
    }

    .footer{
    display: flex;
    /* flex-direction: row; */
    justify-content: space-evenly;
    align-items: center;
    height:200px;
    background-color: #FFD9DE;
    
}
.details{
  
    height:150px;
    align-items: center;
    justify-content: center;
    display: flex;
    flex-direction: column;
    
}

.details img{
    width:20px;
}
.shop a{
    color:black
}
.shop{
    
    
    display: flex;
    align-items: center;
    justify-content: space-evenly;
}
.follow img{
    width: 30px;
}
.follow{
    /* width:450px; */
    
    display: flex;
    flex-direction: column;
   align-items: center;
   justify-content: space-between;
  
   
    
}
.icons{
    padding-bottom: 40px;
    justify-content: space-evenly;
}

.follow p{
    padding-top: 45px;
    
}
.cardContent{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    
}
.copy{
    width: 25px;
    
}
.cpyRight{
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #FFD9DE;
}

    </style>
</head>

<body>




<?php 

include('navbar.php'); ?>

    <div class="container-fluid bg-light pr-0 pl-0">
        <div class="col-md-12 outer_slide pr-0 pl-0 ">
            <div id="carouselExampleIndicators" class="carousel slide pr-0 pl-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img class="d-block w-100" height="530" src="./images/sliderdaal.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" height="530" src="./images/Dryfruits.jpg" alt="Second slide">
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>
    </div>

    <div class="container mt-4 ">
        <div class="item_stat">
        </div>
        <div class="row">
            <div class="col-md-4 ">
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-center font-weight-bold">
                        CATEGORIES
                    </div>
                    <div class="card-body">
                        <a href="#essentials" class="text-warning">Groceries & Staples</a>

                        <ul style="list-style-type: none;" class="pl-3">

                            <li class="pb-2 font-weight-light"><img class="pr-1" src="./images/right-arrow.svg">Dals & Pulses.</li>
                            <li class="pb-2 font-weight-light"><img class="pr-1 " src="./images/right-arrow.svg">Dry Fruits.</li>
                            <li class="pb-2 font-weight-light"><img class="pr-1" src="./images/right-arrow.svg">Edible-Oils & Ghee.</li>
                            <li class="pb-2 font-weight-light"><img class="pr-1" src="./images/right-arrow.svg">Flours</li>
                            <li class="pb-2 font-weight-light"><img class="pr-1" src="./images/right-arrow.svg">Salt &Sugar.</li>
                            <li class="pb-2 font-weight-light"><img class="pr-1" src="./images/right-arrow.svg">Masala & Spices.</li>
                        </ul>

                        <a href="#snacks" class="text-warning">Snacks & Eateries</a>

                        <ul style="list-style-type: none;" class="pl-3">

                            <li class="pb-2 font-weight-light"><img class="pr-1" src="./images/right-arrow.svg">Biscuits.</li>
                            <li class="pb-2 font-weight-light"><img class="pr-1 " src="./images/right-arrow.svg">Soft-Drinks.</li>
                            <li class="pb-2 font-weight-light"><img class="pr-1" src="./images/right-arrow.svg">Chips.</li>
                            <li class="pb-2 font-weight-light"><img class="pr-1" src="./images/right-arrow.svg">Cup-Cakes.</li>


                        </ul>

                        <a href="#" class="text-warning">PersonalCare</a>

                        <ul style="list-style-type: none;" class="pl-3">

                            <li class="pb-2 font-weight-light"><img class="pr-1" src="./images/right-arrow.svg">Baby-Care.</li>
                            <li class="pb-2 font-weight-light"><img class="pr-1 " src="./images/right-arrow.svg">Oral-Care.</li>
                            <li class="pb-2 font-weight-light"><img class="pr-1" src="./images/right-arrow.svg">Shaving Needs.</li>
                            <li class="pb-2 font-weight-light"><img class="pr-1" src="./images/right-arrow.svg">Sanitory Needs.</li>


                        </ul>

                    </div>
                </div>

            </div>
            <div class="col-md-8 pr-0 bg-light pt-3">
                <div class="container ">
                    <h2 style="background-image: linear-gradient(45deg, #f3ec78, #af4261);
	-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><strong>Groceries & Staples.</strong></h2>
                    <div class="row  pl-0 pr-0 mr-0 ml-0 products_card pt-2 Gro_products">

                        <?php
                        include 'connect.php';
                        $sql = "SELECT * FROM products WHERE `productCatType` = 'Grocery'";
                        $res = mysqli_query($conn, $sql);
                        $rows = mysqli_num_rows($res);

                        if ($rows > '0') {
                            while ($row = mysqli_fetch_assoc($res)) {
                                echo  '<div class="card mb-3" style="width: 14rem;">
                                    <img class="card-img-top" height="190" src="' . $row['productImg'] . '" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">' . $row['productName'] . '</h5>
                                            <div class="card-text">
                                            <i class="fa fa-inr" ></i><strong>' . $row['productPrice'] . '</strong>
                                                <div class="d-block flex-column">
                                                <h6>Category: ' . $row['productCatType'] . '</h6>
                                                <p class="text-muted"> SubCategory: ' . $row['proSubCatType'] . '</p>
                                                <p class="mt-0 pt-0">Size: ' . $row['productSize'] . ' </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div>
                                            
                                            
                                                <button class="btn btn-block addCartItem" style="background-color:#FF9900 "><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                                            
                                            </div>
                                        </div>
                                    </div>';
                            }
                        }

                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-4">

        <div class="col-md-12 pr-0 bg-light pt-3">
            <div class="container " id="snacks">
                <h2 style="background: linear-gradient(to right, #30CFD0 0%, #330867 100%);
  -webkit-background-clip: text;-webkit-text-fill-color: transparent;"><strong>Snacks.</strong></h2>
                <div class="row  pl-0 pr-0 mr-0 ml-0 products_card Snacks_products pt-2">
                <?php
                    include 'connect.php';
                    $sql = "SELECT * FROM products WHERE `productCatType` = 'Snacks'";
                    $res = mysqli_query($conn, $sql);
                    $rows = mysqli_num_rows($res);

                    if ($rows > '0') {
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo  '<div class="card mb-3" style="width: 16rem;">
                                    <img class="card-img-top" height="190" src="' . $row['productImg'] . '" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">' . $row['productName'] . '</h5>
                                            <div class="card-text">
                                            <i class="fa fa-inr" ></i><strong>' . $row['productPrice'] . '</strong>
                                                <div class="d-block flex-column">
                                                    <h6>Category: ' . $row['productCatType'] . '</h6>
                                                    <p class="text-muted"> SubCategory: ' . $row['proSubCatType'] . '</p>
                                                    <p>Size: ' . $row['productSize'] . ' </p>
                                                </div>
                                        </div>
                                        <hr>
                                            <div>
                                            
                                            
                                                <button class="btn btn-block addCartItem" style="background-color:#FF9900 "><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                                            
                                            </div>
                                        </div>
                                    </div>';
                        }
                    }

                    ?>
                    

                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->

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
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>