
<?php
include 'connect.php';
if(isset($_POST['btn_Sub'])){
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $pass_hash= md5($pass);

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
          $sql = "SELECT * FROM USERS WHERE email = '$email' and pass = '$pass_hash'";
          
          $result = mysqli_query($conn, $sql);
          $row = mysqli_num_rows($result);
          $res = mysqli_fetch_assoc($result);
          $reg_pass = $res['pass'];
          $user_id=$res['userId'];
          if($reg_pass == $pass_hash){
              if($row > 0){
                $sql_Logdata = "INSERT INTO `user_logg` ( `userId`,`loggin_time`, `email`, `password`)
              VALUES ( $user_id,current_timestamp(), '$email', '$pass_hash')";
              
              mysqli_query($conn, $sql_Logdata);
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['id']=$user_id;
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success,User Found!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>';

                    if(isset($_POST['btn_Sub'])){
                        header('refresh: 5;url= index.php');
                        // exit();
      
                    }
              }
            }
          else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error,User Not Found!,Please Re-Enter your login username and password</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
          }
      }
}

//For admin


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    
    
    <title>Login</title>
</head>
<body>
  <div class="store_name"><h4>Grofer Basics</h4></div>
<div class="surround">
  <div class="wrapper">
    <div class="title">
      Login
    </div>
    <form action="login.php" method="post">
    <div class="form">
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" name="email">
       </div> 
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" id="pswrd_1" name="pass">
          <span>
          <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
		      </span> 
       </div>
       <div class="inputfield col-md-3 pl-1">
          <label>Admin</label>
          <input type="checkbox" id="vehicle1" name="admin" value="admin">
       </div>  
      <div class="inputfield">
        <input type="submit" value="Login" class="btn" name="btn_Sub">
      </div>
    </div>
    </form>
    <br>
    <div class="inputfield" style="text-align: center;">
        <label style=" font-size:14px;">Not a member?</label><a href="signup.php"> <label style=" font-size:14px;">Signup Now</label></a>
      </div>
  </div>

</div>

<?php
    if(isset($_POST['btn_Sub']) && $row > 0){
       echo '<div class="redirect_div text-center">
          <p>You will be redirected to Home-Page within 5 secs...</p>
        </div>';
      header('refresh: 5; url= index.php');
    }
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script>
const passField = document.querySelector("#pswrd_1");
    const showBtn = document.querySelector("span i");
    showBtn.onclick = (() => {
      if (passField.type === "password") {
        passField.type = "text";
        showBtn.classList.add("hide-btn");
      } else {
        passField.type = "password";
        showBtn.classList.remove("hide-btn");
      }
    });    
</script>
</body>
</html>