<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript">
	$(document).ready(function(){
		
		
		// use keyup event on email field
		$("#email").keyup(function(){
			if(validateEmail()){
				// if the email is validated
				// set input email border green
				$("#email").css("border","2px solid green");
				// and set label 
				$("#emailMsg").html("<p class='text-success'>Validated</p>");
			}else{
				// if the email is not validated
				// set border red
				$("#email").css("border","2px solid red");
				$("#emailMsg").html("<p class='text-danger'>Plz enter valid email</p>");
			}
			
		});
		// use keyup event on password
		$("#pswrd_1").keyup(function(){
			// check
			if(validatePassword()){
				// set input password border green
				$("#pswrd_1").css("border","2px solid green");
				//set passMsg 
				$("#passMsg").html("<p class='text-success'>Strong password</p> <br> <br>");
			}else{
					// set input password border red
				$("#pswrd_1").css("border","2px solid red");
				//set passMsg 
				$("#passMsg").html("<p class='text-danger'>weak password</p> <br> <br>");
			}
			
		});
    $("#mob").keyup(function(){
        if(validateMob()){
          $("#mob").css("border","2px solid green");
          $("#MobMsg").html("<p class='text-success'>Valid</p> <br> <br>");
        }else{
          $("#mob").css("border","2px solid red");
          $("#MobMsg").html("<p class='text-danger'>invalid</p> <br> <br>");
        }

    });
	});

	function validateEmail(){
		// get value of input email
		var email=$("#email").val();
		// use reular expression
		 var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		 if(reg.test(email)){
		 	return true;
		 }else{
		 	return false;
		 }

	}
	function validatePassword(){
		//get input password value
		var pass=$("#pswrd_1").val();
		// check it s length
		if(pass.length > 7){
			return true;
		}else{
			return false;
		}

	}

  function validateMob(){
    var mob=$('#mob').val();
    var regmob = /^[789]\d{9}$/;
    if(regmob.test(mob)){
      return true;
    }else{
      return false;
    }
  }
</script>
    
   
    <title>Register</title>
</head>
<body>
<div class="store_name"><h4>Grofer Basics</h4></div>
<div class="surround">
<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    <form action="register.php" method="post">
    <div class="form">
       <div class="inputfield">
          <label>Full Name</label>
          <input type="text" class="input" name="fName">
       </div>   
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" id="email" name="email">          
       </div> 
      <div>
       <span id="emailMsg" class="float-right"></span>
      </div>
      <br>
      <br>
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="Mob" id="mob">
       </div>
       <div>
       <span id="MobMsg" class="float-right" ></span>
       </div>
       <br>
       <br> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address"></textarea>
       </div>
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" id="pswrd_1" name="pass">
          <span class="show-btn"><i class="fas fa-eye"></i></span> 
       </div>
       <div>
       <span id="passMsg" class="float-right" ></span>
       </div>
       <br>
       <br>
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" name = "con_pass" class="input" id="pswrd_2">
       </div>  
      <div class="inputfield">
        <input type="submit" value="Register" class="btn" name= "btnSubmit" id="btn" >
      </div>
    </div>
    </form>
</div>
</div>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
      $("#btn").click(function () {
        var password = $("#pswrd_1").val();
        var confirmPassword = $("#pswrd_2").val();
        if (password != confirmPassword) {
          alert("Passwords do not match.");
          return false;
        }
        return true;
      });
    });
  </script>
</body>
</html>