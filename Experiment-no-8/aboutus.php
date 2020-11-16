<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js" integrity="sha512-wK2NuxEyN/6s53M8G7c6cRUXvkeV8Uh5duYS06pAdLq4ukc72errSIyyGQGYtzWEzvVGzGSWg8l79e0VkTJYPw==" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Itim&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <!-- navbar  -->
    <!-- <nav class="navbar navbar-dark sticky-top " style="background-color:black;">

        <a class="navbar-brand" href="#">Navbar</a>

        <div class=" d-inline-flex font-weight-bold ">
            <ul class=" d-flex flex-row navbar-nav ">
                <li class="nav-item mr-3 text-dark">
                    <a class="nav-link" href="./index.php">Home</a>
                </li>
                <li class="nav-item mr-3 text-dark">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item mr-3 text-dark">
                    <a class="nav-link" href="./aboutus.php">About-Us</a>
                </li>
                <li class="nav-item mr-3 text-dark">
                    <a class="nav-link" href="./login.php">Sign-Up</a>
                </li>

            </ul>

    </nav> -->
    <?php
        include 'navbar.php';
    
    ?>


    <div class="custom" style="background: #BE93C5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #7BC6CC, #BE93C5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #7BC6CC, #BE93C5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



">
        <!-- container 1 -->
        <div class="container my-4">
            
            <div class="row featurette mt-1" >
                <div class="col-md-12">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="./images/Grocery01.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="./images/Grocery02.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="./images/Grocery03.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
                
                <div class="col-md-10 mt-3">
                    
                   <h4 class="mb-4 text-light" style="font-family: 'Raleway', sans-serif;">Welcome to our Store, your number one source for all things like Snacks, Health care products, Daily-Essentials,etc.. 
                       </h4>
                    <p>We Believe our customer should feel proud and satisfied as well, When
                        they buy goods from our store. For that we provide goods to our customers in 
                        good and reasonable price. 
                    </p>
                    <p class="lead  mb-0 text-light">Prioritize the goods you value most. When placing orders, don't overlook the
                                product's shelf life label. Individually, manage each product. 
                    
                    </p>
                    <span class="mt-0 pt-0 text-light"><strong>-Our Founder</strong></span>
                </div>
                
            </div>
            <hr style="color: white;background-color:white; height: 1px;" class="mt-4 mb-0">
                <div class="col-md-4 pl-0 mt-3 team_title d-flex justity-content-left">
                    <h1 style="font-family: 'Raleway', sans-serif;color: white"><b>Our Team ProjectX</b></h1> 
                </div>
                
          <div class=" row featurette d-flex justify-content-center align-content-center my-4 ">
              
                    <div class="col-md-7 order-md-2 ">
                        <h2 class="featurette-heading pl-4 text-light"> Members and their role.</h2>
                        <p class="lead">
                            <ol class="text-light">
                                <li>Kazim Sayed : Backend developer and group leader</li>
                                <br>
                                <li>Mazhar khan : FullStack developer and vice leader</li>
                                <br>
                                <li>Sahil Mulani: Backend developer </li>
                                <br>
                                <li>Mohd Yusuf  : Frontend developer </li>
                                <br>
                            </ol>
                        </p>
                    </div>
                    <div class="col-md-5 ">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-thumbnail rounded"
                            height="500" src="./images/thumbnail.jpg" alt="">
                    </div>
                </div>
                
            </div>
        </div>

        <!-- footer  -->
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
          <script>
          gsap.registerPlugin(ScrollTrigger);
          gsap.to(".team_title",{
              scrollTrigger:{
                  trigger: ".team_title",
                  toggleActions: "restart pause "
              },
              x: 350,
              duration: 3,
              opacity: 1,
          });
          gsap.from(".featurette-image",{
              scrollTrigger:{
                  trigger: ".featurette-image",
                  toggleActions: "restart pause "
              },
              
              duration: 3,
              opacity: 0,
          });
          </script>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
</body>

</html>