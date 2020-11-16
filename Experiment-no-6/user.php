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
</style>
</head>

<body >
    
    
<?php 
include 'navbar.php'; 
include 'connect.php';

?>

    <div class="title d-flex align-items-center justify-content-center" style="background-color: #A7BFE8;height: 250px;padding-bottom: 30px; ">
        <div class="card " style="width: 69rem;" >
    
            <div class="card-body ">
                <h5 class="card-title">User-Profile</h5>
                <p class="card-text">Note: All the information displayed below are related to current user logged-in, In order to change
                your delivery address or email in case click Edit Profile button </p>
                
            </div>
        </div>
    </div>

<?php
if(!isset($_SESSION['email'])){
    echo '<div class=" pb-5">  
        <div class="d-flex align-items-center justify-content-center" style="margin-top: -50px">
            <div class="card " style="width: 69rem;" >
            
                <div class="card-body ">
                    <h4 class="card-title">Sorry, No user Found Please login to see profile.</h4>
                  
                </div>
            </div>
        </div> 
        </div>';
}
else{
    $userEmail  =$_SESSION['email'];
$sql = "SELECT * FROM USERS WHERE email= '$userEmail'";

$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);

if($rows > 0){
   while($row= mysqli_fetch_assoc($result)){ 
    echo  '<div class=" pb-5 " > 
            <div class="container" style="margin-top: -50px">
                <ul class="list-group col-md-12 pr-0 rounded border border-info">
                    <li class="list-group-item"><strong>Name: </strong>' .$row['fullName'].'</li>
                    <li class="list-group-item"><strong>Email: </strong>' .$row['email'].'</li>
                    <li class="list-group-item"><strong>Address: </strong>' .$row['address'].'</li>
                    <li class="list-group-item"><strong>Mobile no: </strong>' .$row['Mob'].'</li>
                    <li class="list-group-item"><strong>AccountCreated_At: </strong>' .$row['dateCreated']. '</li>
                    
                </ul>
            </div>';

   }
    echo '<div class="col-md-4 mx-auto d-flex justify-content-center mt-3 mb-3 edit">
                <button class="btn" style="background-color:#FF9900;"><a class="text-light" href="./updateProfile.php">Edit Profile</a></button>
            </div>
             
        </div>
        ';
}
?>

<?php
}

  
?>    <?php  if(!isset($_SESSION['email']))
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

