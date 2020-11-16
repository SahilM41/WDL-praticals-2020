<?php 
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@700&display=swap" rel="stylesheet">
    <title>Cart</title>
    <style>
        .title{
            display: flex;
            flex-direction: row;
            font-family: 'Overpass', sans-serif;
            
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
    <div class="container-fluid pr-5 pl-5 bg-light">
        
            <div class="row d-flex justify-content-center ">
                    
                <div class="col-md-12 mt-3 mb-5">
                    <div class="card pt-2 " >
                        <div class="col-md-12 ">
                            <div class="title">
                                <i class="fa fa-shopping-bag fa-2x mr-3" aria-hidden="true"></i>
                                <h3 class="pt-2">Items in Your Cart.</h3>
                            </div>
                            <hr class="mt-0">
                                
                            <div class="card-body ">
                            
                                <div class="row mainRow mt-4">
                                      
                                        <input type="hidden" class="pid" value=1>
                                        <input type="hidden" class="pprice" value=100>
                                        
                                        <div class="col-md-2 d-flex justify-content-center">
                                            <img src="./images/Biscuit.jpg" height="80" alt="No Img">
                                        </div> 
                                        <div class="col-md-3 d-block pl-4 ">
                                            <h4 class="mb-0 pb-0"><strong>parle.</strong></h4>
                                            <p class="mt-2 text-muted mb-0 pb-0">Product-SubCat:Biscuit </p>
                                            <p class="mt-1">Size: 50g</p>
                                        </div>
                                        <div class="col-md-3 d-flex flex-row pl-0 justify-content-around align-items-center">
                                            <h5 class="mb-0 pb-0 mr-4 "><i class="fa fa-inr"></i>20</h5>
                                            <input style="width:30%" class="ItemQty ml-3" type="number" value=1>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-around align-items-center  pl-0">
                                            <h5 class="mb-0 pb-0  mr-3 totalPrice"><i class="fa fa-inr"></i><strong>20</strong></h5>
                                            <a href="#" class="btn btn-danger"> <i class="fa fa-trash"></i> Remove</a>
                                        </div>
                                        
                                        
                                    
                                    
                                </div>
                                <hr>
                                <div class="row">
                                    <div class=" col-md-2  d-flex flex-column ml-auto pr-2 ">
                                        <h4 class="mb-2 pl-1"> Total: <strong>20</strong> </h4>
                                        <a class="btn btn-primary" href="checkout.php" role="button"><i class="fa fa-credit-card-alt mr-2" aria-hidden="true"></i>CheckOut</a>
                                   </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    
            
    </div>

    
        <script>
            $(document).ready(function(){
                $('.ItemQty').on('change',function(){
                    $lex = $(this).closest('.mainRow');
                    let pid = $lex.find('.pid').val();
                    let pprice = $lex.find('.pprice').val();
                    let pqty = $lex.find('.ItemQty').val();
                    location.reload(true);
                    $.ajax({
                        url: "cartItem.php",
                        method: "POST",
                        cache: false,
                        data:{pid:pid, pprice: pprice, pqty: pqty},
                        success: function(res){
                            
                        }
                    });
                    
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>