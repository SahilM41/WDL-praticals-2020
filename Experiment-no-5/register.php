<?php 
    if(isset($_POST['btnSubmit']) && $_SERVER["REQUEST_METHOD"] == "POST"){
        $name =$_POST['fName'];
        $email =$_POST['email'];
        
        $address =$_POST['address'];
        $password =$_POST['pass'];
        $hashed_pass= md5($password);
        
        echo 'Your name is '. $name. '<br>';
        echo 'Your email is '. $email. '<br>';
        echo 'Your address is '. $address. '<br>';
        echo 'Your password is '. $hashed_pass; 
    }


?>
