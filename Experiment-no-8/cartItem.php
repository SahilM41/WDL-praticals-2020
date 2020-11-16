<?php 
include './connect.php';
session_start();

if(isset($_POST['product_id']) && isset($_SESSION['id'])){
    $userId = $_SESSION['id'];
    $pid = $_POST['product_id'];
    $pname = $_POST['productName'];
    $pprice = $_POST['productPrice'];
    $pimg = $_POST['productImg'];
    $psize = $_POST['productSize'];
    $pSubCat = $_POST['proSubCatType'];
    
    
        $dub_product = "SELECT * FROM cart WHERE `userId`='$userId ' AND `product_id` = '$pid'";
        $result = mysqli_query($conn, $dub_product);
        $rows = mysqli_num_rows($result);
    if(!$rows){
        
        $user_id = $_SESSION['id'];
        $sql = "INSERT INTO `cart` ( `product_id`,`userId`, `productName`, `productPrice`,`totalPrice`, `proSubCatType`, `quantity`, `productSize`, `productImg`)
                    VALUES ( '$pid','$userId' ,'$pname', '$pprice','$pprice', '$pSubCat', '1', '$psize', '$pimg')";
        
        $ans = mysqli_query($conn, $sql);
        
        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Item added to your cart.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        
    }
    else{
        echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oops!</strong> Item already added to your cart.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }

}

if(isset($_POST['action']) == "cart_count" && isset($_SESSION['id'])){      //Get the no of count in cart for particular user.
    $current_id = $_SESSION['id'];
    // echo $current_id;
    $query = "SELECT * FROM cart WHERE  `userId`= '$current_id'";
    
    $ans = mysqli_query($conn, $query);
    $item_count = mysqli_num_rows($ans);
    if($item_count > '0'){
        echo $item_count;
    }
    else{
        echo '0';
    }
    
}

if(isset($_GET['remove'])){         //Removing Item from cart on click of a button remove
    $productId = $_GET['remove'];
    $sql_query = "DELETE FROM `cart` WHERE `product_id` = '$productId'";
    $response = mysqli_query($conn, $sql_query);

    if(isset($response)){
        $_SESSION['alertFormat'] = 'block';
        $_SESSION['message'] = "Item removed from Your Cart.";
        header('location: cart.php');
    }

}

if(isset($_POST['pqty']) && isset($_SESSION['id'])){
    $qty = $_POST['pqty'];
    $pid = $_POST['pid'];
    $pprice = $_POST['pprice'];
    $userId = $_SESSION['id'];
    $totalPrice = $qty * $pprice;

    $sql = "UPDATE `cart` SET `quantity` = '$qty', `totalPrice` = '$totalPrice' WHERE `userId` = '$userId' AND `product_id` = '$pid'";
    $res = mysqli_query($conn, $sql);
   header('location: cart.php');

}


// else{
//     echo '0';
// }

?>