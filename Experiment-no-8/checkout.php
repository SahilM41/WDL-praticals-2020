<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Itim&display=swap" rel="stylesheet">

  <style>
    .row {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      margin: 0 16px;
      padding-top: 20px;

    }

    .container {
      background-color: #f2f2f2;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;
    }

    .details {
      padding-top: 10px;
      padding-right: 10px;
      padding-left: -15px;
      align-items: center;
    }

    @media (max-width: 800px) {
      .row {
        flex-direction: column-reverse;
      }

      .col-25 {
        margin-bottom: 20px;
      }
    }
  </style>

  <title>Classic Grocery || Order Now</title>

  <style>
    .order_detail:hover{
      color: black;
    }
    
  </style>
</head>

<body>
  <?php include 'navbar.php' ?>
  <div class="row">
    <div class="col-md-8">
      <div class="col-50">
        <div class="container">
          <h2>Checkout</h2>
          <hr class="mt-0 mb-0">
          <div class="details">
            <?php
            include 'connect.php';
            $cartTotal = 0;

            if (isset($_SESSION['id'])) {   //For order Total...

              $current_user = $_SESSION['id'];
              $query = "SELECT * FROM cart WHERE `userId` = '$userId'";
              $result = mysqli_query($conn, $query);
              $records = mysqli_num_rows($result);
              if ($records > '0') {
                while ($row = mysqli_fetch_assoc($res)) {
                  $cartTotal += $row['totalPrice'];
                }
              }
            }
            if (!isset($_SESSION['email'])) {
              echo "<h3>Kindly login again..</h3>";
            } else {

              $userEmail  = $_SESSION['email'];
              $sql = "SELECT * FROM USERS WHERE email= '$userEmail'";

              $result = mysqli_query($conn, $sql);
              $rows = mysqli_num_rows($result);

              if ($rows > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                  echo  '
                         <div class="d-flex flex-column ">
                             <div class="d-flex flex-row"><h4>Address:</h4><div class=" ml-2 pt-1"><p>' . $row['address'] . '</p></div></div>

                             <div class="d-flex flex-row"><h4>Mobile no:</h4><div class=" ml-2 pt-1"><p>' . $row['Mob'] . '</p></div></div>
                        </div>
                     ';
                }
              }
            }

            ?>
          </div>
          <div class="button  d-flex justify-content-center">
            <button type="button" class="btn btn-danger btn-md "><a class="text-light" href="./updateProfile.php">Update</a></button>
          </div>
          
          <div class="order_summary mt-2 ">
            <h3 class="">Order Summary</h3>
            <hr class="mb-1 mt-0">
            <div class="order pl-1 d-flex flex-column align-items-start">
              <p class="font-weight-light  mb-0">Order Subtotal: <i class="fa fa-inr mr-1" ></i><?php echo number_format($cartTotal, 2); ?></p>
              <span class="font-weight-light mt-0">Shipping: <b>FREE</b></span>
              <hr class="mb-0 ml-0 mt-1" style="width: 20%;">
              <p class="font-weight-light  mt-2 mb-2"><b> Order Total: <i class="fa fa-inr mr-1" ></i><?php echo number_format($cartTotal, 2); ?></b></p>
            </div>
          </div>
          <h3 class="mt-3">Payments</h3>
          <hr class="mt-0 mb-1">
   
            <div class="d-flex flex-column col-md-4  pl-0">
              <label><strong>Choose mode of Payment:</strong></label>
              <select width="25" name="cars">
                <option value="Cash on delivery">Cash on delivery</option>
              </select>
             
            </div>
            <form action="order.php" method="post">
            <div class="button mt-3 ">
            <button type="submit" name="order_cart" class="btn order_detail text-light" style="background-color: #FF9900;" onclick="myFunction()" ><i class="fa fa-shopping-cart fa-lg mr-1"></i>Place Your Order</button>
            </div>
            </form>
         
        </div>
      </div>
    </div>





    <div class="col-md-4">
      <div class="container">

        <h4 class="d-flex justify-content-between align-items-center mb-3">

          <div class=" d-flex  align-items-center " ><i class="fa fa-shopping-bag fa-lg mr-3" aria-hidden="true"></i><h4 >Your Order</h4></div>
          <span class="badge badge-warning badge-pill">
            <?php
            if (isset($_SESSION['id'])) {
              $userId = $_SESSION['id'];
              $sql = "SELECT * FROM cart WHERE `userId` = '$userId'";
              $res = mysqli_query($conn, $sql);
              $rows = mysqli_num_rows($res);

              if ($rows > '0') {
                echo $rows;
              } else {
                echo '0';
              }
            } else {
              echo '0';
            }


            ?></span>
        </h4>


        <div class="cart_items pt-2 pb-2">
          <?php
          
          if (isset($_SESSION['id'])) {

            $userId = $_SESSION['id'];
            $sql = "SELECT * FROM cart WHERE `userId` = '$userId'";
            $res = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($res);
            if ($rows > '0') {
              while ($row = mysqli_fetch_assoc($res)) {
                // $cartTotal += $row['totalPrice'];
          ?>

                <ul class="pl-0 ml-0 ">
                  <li class="list-group-item d-flex justify-content-around lh-condensed">
                    <div>
                      <h6 class="my-0"><?php echo $row['productName'] ?>.</h6>
                      <small class="text-muted">Quantity: <?php echo $row['productSize'] ?></small>
                    </div>
                    <span class="text-muted"><?php echo $row['quantity']  ?></span>
                    <span class="text-muted"><i class="fa fa-inr mr-1"></i><?php echo number_format($row['totalPrice'], 2) ?></span>
                  </li>
                  </li>
                </ul>

          <?php
              }
            } else {
              echo '<h4 >No Items in Your Cart, Go back to our Store for shopping by Clicking here.<a href="store.php">Store</a></h4>';
            }
            $userId = $_SESSION['id'];
            $sql = "SELECT * FROM cart WHERE `userId` = '$userId'";
            $res = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($res);
            $cart_count = $rows;
            $mode_pay = "Cash on delivery";
            $order_id = uniqid();
            if($cartTotal > '1'){ 
              $order_query = "INSERT INTO `orders` ( `order_id`, `userId`, `count_items`,`mode_payment`,`order_total`,`order_date`)
              VALUES ( '$order_id', '$userId', '$cart_count','$mode_pay','$cartTotal',current_timestamp())  ";
              $res = mysqli_query($conn, $order_query);
              
            }
          }

          ?>
        </div>
        <hr>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <span>Order SubTotal </span>
          <h5><i class="fa fa-inr mr-1 "></i><?php echo number_format($cartTotal, 2) ?></h5>
        </li>

      </div>
    </div>
  </div>

 
  <script>
    $(document).ready(function() {
      $('.ItemQty').on('change', function() {
        $lex = $(this).closest('.mainRow');
        let pid = $lex.find('.pid').val();
        let pprice = $lex.find('.pprice').val();
        let pqty = $lex.find('.ItemQty').val();
        location.reload(true);
        $.ajax({
          url: "cartItem.php",
          method: "POST",
          cache: false,
          data: {
            pid: pid,
            pprice: pprice,
            pqty: pqty
          },
          success: function(res) {

          }
        });

      });
      $('.order_detail').on('click',function(){
        // alert('');
        // location.replace("http://localhost/E-commerce/order.php");
        location.replace("./order.php");
      });
    });


 
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
</body>

</html>