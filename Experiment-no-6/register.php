 <?php 
include 'connect.php';
$fName = $_POST['fName'];
$email = $_POST['email'];
$password =$_POST['pass'];
$address = $_POST['address'];
$Mob= $_POST['Mob'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $hash = md5($password);
        $sql ="INSERT INTO `users` ( `fullName`, `email`, `pass`, `address`,`Mob`, `dateCreated`)
                VALUES ('$fName', '$email', '$hash', '$address','$Mob', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        
        if($result ){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congrats, User Registered </strong> you will be Redirected to Login-Page in 5secs. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Sorry,something went wrong please try filling details again!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }

        if(isset($_POST['btnSubmit'])){
            header('refresh: 5;url= login.php');
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</body>
</html>
