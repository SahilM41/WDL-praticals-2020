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

<div class=" pb-5">  
        <div class="d-flex align-items-center justify-content-center" style="margin-top: -50px">
            <div class="card " style="width: 69rem;" >
            
                <div class="card-body ">
                    <h4 class="card-title">Sorry, No user Found Please login to see profile.</h4>
                  
                </div>
            </div>
        </div> 
        </div>';


        <div class="col-md-4 mx-auto d-flex justify-content-center mt-3 mb-3 edit">
                <button class="btn" style="background-color:#FF9900;"><a class="text-light" href="./updateProfile.php">Edit Profile</a></button>
            </div>
             
        </div>
 
<div class="box box-solid">
                <div class="box-header with-border">
                  <h4 class="box-title pl-3"><i class="fa fa-calendar"></i> <b>Transaction History</b></h4>
                </div>
                <div class="box-body">
                  <table class="table table-bordered" id="example1">
                    <thead>
                      <th class="hidden"></th>
                      <th>Date</th>
                      <th>Order-Id</th>
                      <th>Amount</th>
                      <th>Mode-of-Payment</th>
                    </thead>
                    <tbody>
                    
                    </tbody>
                  </table>
                </div>
              </div>
   
    </div>


</body>
</html>

