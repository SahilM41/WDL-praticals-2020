<?php 

$servername ="sql204.epizy.com";
$username = "epiz_27209567";
$password = "oiWEzD41Xwqx";
$database = "epiz_27209567_chachastore";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn){
    //COnnection is sucess..
}
else{
    echo "Connection is not established!";
}

?>