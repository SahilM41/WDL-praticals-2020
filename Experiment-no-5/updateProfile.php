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

<div class="d-flex align-items-center justify-content-center" style="margin-top: -50px">
    <div class="card " style="width: 69rem;" >
    
        <div class="card-body ">
            <h4 class="card-title">Sorry, No user Found Please login to Update profile.</h4>
          
        </div>
    </div>
</div> 

    <div class="container d-flex justify-content-center  mt-4">
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
    </div>
    </div>

</body>
</html>

