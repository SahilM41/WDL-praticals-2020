<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
    .edit button:hover{
        background: #A7BFE8 !important;
    }

    .footer{
    display: flex;
    /* flex-direction: row; */
    justify-content: space-evenly;
    align-items: center;
    height:200px;
    background-color: #FFD9DE;
    
    
}
.footer_nas{
    position:fixed;
    bottom: 0;
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
.edit:hover{
    background: #A7BFE8 !important;
}
</style>
</head>
<body >
    
<?php 
include 'connect.php';
include 'navbar.php';

?>

<div class="title d-flex align-items-center justify-content-center" style="background-color: #A7BFE8;height: 250px;padding-bottom: 30px; ">
        <div class="card " style="width: 69rem;" >
    
            <div class="card-body ">
                <h5 class="card-title">Update User-Profile</h5>
                <p class="card-text">Note: All the information displayed below are related to current user logged-in, In order to change
                your delivery address or email in case click Edit Profile button </p>
                
            </div>
        </div>
</div>

<?php
if(!isset($_SESSION['email'])){
    echo '<div class="d-flex align-items-center justify-content-center" style="margin-top: -50px">
    <div class="card " style="width: 69rem;" >
    
        <div class="card-body ">
            <h4 class="card-title">Sorry, No user Found Please login to Update profile.</h4>
          
        </div>
    </div>
</div> ';
}
else{
    $userEmail = $_SESSION['email'];
    $sql = "SELECT * FROM USERS WHERE email= '$userEmail'";

    $result = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($result);
    $up_row = mysqli_fetch_assoc($result);
    $old_email =$up_row['email'];





   if($rows > 0){
    echo  '<div class=" pb-5 " >
            <div class="container " style="margin-top: -50px">
                <ul class="list-group col-md-12 pr-0 rounded border border-info">
                    <li class="list-group-item"><strong>Name: </strong>' .$up_row['fullName'].'</li>
                    <li class="list-group-item"><strong>Email: </strong>' .$up_row['email'].'</li>
                    <li class="list-group-item"><strong>Address: </strong>' .$up_row['address'].'</li>
                    <li class="list-group-item"><strong>Mobile no: </strong>' .$up_row['Mob'].'</li>
                    <li class="list-group-item"><strong>AccountCreated_At: </strong>' .$up_row['dateCreated']. '</li>
                    
                    <li class="list-group-item"><strong>isUpdated: </strong>' .$up_row['isUpdated']. ' (Here, 1 refers to updated and 0 not updated.)</li>
                </ul>
            </div>';
        echo '<div class="container d-flex justify-content-center  mt-4">
                    <div class="d-flex justify-content-center flex-column col-md-8">
                        <h3 class="text-info text-center pb-3">Update, Your User-Profile refering above user-info.</h3>
                        <form  action="updateProfile.php" method="post">
                            <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            
                            </div>
                            
                            <div class="form-group">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" id="address" name="address">
                            </div>

                            <div class="form-group">
                            <label for="Mob">Mobile</label>
                            <input type="text" class="form-control" id="Mob" name="Mob">
                            </div>
                            
                            <button type="submit" class="btn edit" style="background-color:#FF9900; color: white"  value="btn_up">Submit</button>
                        </form>
                    </div>
                </div>
                </div>';

    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['email'] != "" && $_POST['address'] != "" && $_POST['Mob'] != ""){
        $up_email = $_POST['email'];
        
        $up_address = $_POST['address'];
        $up_Mob=$_POST['Mob'];
        
        $up_sql ="UPDATE `users` SET `email` = '$up_email' ,`address` ='$up_address', `Mob` ='$up_Mob', `isUpdated`= '1' WHERE `email` = '$old_email' ";
        $up_result = mysqli_query($conn, $up_sql);   
        echo '<div class="container mt-3">
            <div class="alert alert-success" role="alert">
               <p><strong> Update noted,</strong> it will reflect shortly. </p>
            </div>
        </div>';
    }
   }
   else{
       echo "<h2>Sorry, No records are found to be updated. Please Login</h2>";
   }

}



?>

<?php  if(!isset($_SESSION['email']))
        {echo '<div class="container-fluid pl-0 pr-0 footer_nas">';}
        ?>
        <div class="footer  container-fluid">
          
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
    </div>

</body>
</html>

