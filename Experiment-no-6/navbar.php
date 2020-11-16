<?php
include 'connect.php';
$current_email = "";
$userEmail = "";
session_start();

if (!isset($_SESSION['email'])) {

    $current_email = "Default-User";
} else {
    $userEmail = $_SESSION['email'];
    $current_email = $userEmail;
}
?>


<!doctype html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>nav</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" style="font-family: 'Lobster', cursive;
  font-size: 30px;
  font-weight: bolder;
  letter-spacing: 2px;
  color: #fff;" href="index.php">Grofer Basics</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse nav-pills" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php
                                    if (!isset($_SESSION['id'])) {
                                      echo 'login.php';
                                    } else {
                                      echo 'store.php';
                                    }

                                    ?>">Shop</a>
      </li>

      <li class="nav-item mr-3 text-dark">
          <a class="nav-link" href="./aboutus.php">About-Us</a>
        </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php
            echo $current_email;
          ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./user.php">User-Profile</a>
          <a class="dropdown-item" href="./updateProfile.php">Update-Profile</a>
      </li>
        <?php
        if ($current_email == $userEmail) {
          echo '<li class="nav-item mr-3 text-dark">
                  <a class="nav-link" href="./logout.php">Log-Out</a>
                    </li>';
        } else if ($current_email == "Default-User") {
          echo '<li class="nav-item mr-3 text-dark">
                  <a class="nav-link" href="./login.php">Login</a>
                    </li>';
        }
        ?>
      </li>
        
          <li class="nav-item mr-2 text-dark">
          <a class="nav-link " href="<?php
                                      if (!isset($_SESSION['id'])) {
                                        echo 'login.php';
                                      } else {
                                        echo 'cart.php';
                                      }

                                      ?>">
            <i class="fa fa-shopping-cart fa-lg"></i>
            <span class="badge badge-light ml-1 ">
              1
            </span>
          </a>
        </li>
    </ul>
  </div>
</nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>