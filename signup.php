<?php
session_start();

if(isset($_SESSION['usr_id'])) {
    header("Location: index.php");
}

include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    
    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "Password must be minimum of 6 characters";
    }
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if (!$error) {
        if(mysqli_query($con, "INSERT INTO signup(name,email,password,cpassword) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "', '" . md5($cpassword) . "')")) {
            $successmsg = "Successfully Registered! <a href='dummyl.php'>Click here to Login</a>";
        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Login Script</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<style>

body{
background-image: url("log.jpg");
	 background-size: 100%;
	background-repeat: no-repeat;

	}
.testbox {
  margin: 20px auto;
  width: 343px; 
  height: 464px; 
  -webkit-border-radius: 8px/7px; 
  -moz-border-radius: 8px/7px; 
  border-radius: 8px/7px; 
  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  border: solid 1px #cbc9c9;
}

.cont_principal {
  position: absolute;
  width: 100%;
  height: 100%;
/* Rectangle 3: */


}

.cont_centrar {
  position: absolute;
  width: 320px;
  left:50%;
  top:50%;
  margin-left: -160px;
  margin-top: -160px;
}

.cont_centrar {
  position: relative;
  width: 320px;
  float: left;
  background-image: linear-gradient(-226deg, #FFFFFF 8%, #EEF3F5 100%);

  border-radius: 8px;
transition: all 0.5s;
}

.cent_active {
    box-shadow: 5px 5px 10px 0px rgba(0,0,0,0.21);
}


.cont_tabs_login {
position: relative;
  float: left;
  width: 100%;
}

.ul_tabs > li { 
position: relative;
  float: left;
  width: 50%;
  list-style: none;
  text-align: center;

}

.ul_tabs > li > a  {  
text-decoration: none;
font-family: Helvetica;
font-size: 16px;
    color: #999;
line-height: 14px;
padding: 20px ;
display: block;
transition: all 0.5s;
}

  .ul_tabs > .active > a  {  
color: #FF8383;

}

.linea_bajo_nom {
  position: relative;
  width: 100%;
  float: left;
  background-color: #999;
  height: 2px;
}

.active .linea_bajo_nom {
  position: relative;
  width: 100%;
  float: left;
background-color: #ecce3b;
height: 2px;
}

.cont_text_inputs {
position: relative;
  float: left;
  width: 100%;
  margin-top: 20px;
}

.input_form_sign {
  position: relative;
  float: left;
  width: 90%;
  border: none;
  border-bottom: 1px solid #B0BEC5 ;
  background-color: transparent;
  font-size: 14px;
  outline: none;
  transition: all 0.5s;
    height: 0px;
    margin: 0px;
    padding: 0px;  
opacity: 0;
display: none;
}

.active_inp {
  margin: 5% 5% ;  
  padding: 10px 0px;
  opacity: 1;
height: 5px;
}



.input_form_sign:focus {
  border-bottom: 1px solid #FF8383 ;}

.link_forgot_pass {
position: relative;
  margin-top: 0px;
  margin-left: 30%;
  text-decoration: none;
  color: #999;
  font-size: 13px;
  display: none;
  float: left;
  transition: all 0.5s;
}
.cont_btn {
  position: relative;
  float: left;
}

.btn_sign {
  background: #ecce3b;
  box-shadow: 0px 2px 20px 2px rgba(255,114,132,0.50);
  border-radius: 8px;
  padding: 15px 30px;
  border: none;
  color: black
  font-weight: bold;
  font-size: 14px;
  position: relative;  
  float: left;
  margin-left: 100px;
  margin-top: 20px;
  margin-bottom: 20px;
  cursor: pointer;
}

.terms_and_cons {
  width: 70%;  
  color: #999;
  font-size: 13px;
  transition: all 0.5s;
}

.d_none {
  display: none;
}

.d_block {
  display: block;
}

.cont_text_inputs > input:nth-child(1){
  transition-delay: 0.2s;
}

.cont_text_inputs > input:nth-child(2){
  transition-delay: 0.4s;
}
.cont_text_inputs > input:nth-child(3){
  transition-delay: 0.6s;
}
.cont_text_inputs > input:nth-child(4){
  transition-delay: 0.8s;
  
} 
	</style>
	<script type="text/javascript">
	function sign_up(){
  var inputs = document.querySelectorAll('.input_form_sign');
document.querySelectorAll('.ul_tabs > li')[0].className=""; 
document.querySelectorAll('.ul_tabs > li')[1].className="active"; 
  
  for(var i = 0; i < inputs.length ; i++  ) {
if(i == 2  ){

}else{  
document.querySelectorAll('.input_form_sign')[i].className = "input_form_sign d_block";
}
} 

setTimeout( function(){
for(var d = 0; d < inputs.length ; d++  ) {
 document.querySelectorAll('.input_form_sign')[d].className = "input_form_sign d_block active_inp";  
   }


 },100 );
 //document.querySelector('.link_forgot_pass').style.opacity = "0";
   //document.querySelector('.link_forgot_pass').style.top = "-5px";
   document.querySelector('.btn_sign').innerHTML = "SIGN UP";    
  setTimeout(function(){

 document.querySelector('.terms_and_cons').style.opacity = "1";
  document.querySelector('.terms_and_cons').style.top = "5px";
 
  },500);
  setTimeout(function(){
    document.querySelector('.link_forgot_pass').className = "link_forgot_pass d_none";
 document.querySelector('.terms_and_cons').className = "terms_and_cons d_block";
  },450);

}



function sign_in(){
  var inputs = document.querySelectorAll('.input_form_sign');
document.querySelectorAll('.ul_tabs > li')[0].className = "active"; 
document.querySelectorAll('.ul_tabs > li')[1].className = ""; 
  
  for(var i = 0; i < inputs.length ; i++  ) {
switch(i) {
    case 1:
 console.log(inputs[i].name);
        break;
    case 2:
 console.log(inputs[i].name);
    default: 
document.querySelectorAll('.input_form_sign')[i].className = "input_form_sign d_block";
}
} 

setTimeout( function(){
for(var d = 0; d < inputs.length ; d++  ) {
switch(d) {
    case 1:
 console.log(inputs[d].name);
        break;
    case 2:
 console.log(inputs[d].name);

    default:
 document.querySelectorAll('.input_form_sign')[d].className = "input_form_sign d_block";  
 document.querySelectorAll('.input_form_sign')[2].className = "input_form_sign d_block active_inp";  

   }
  }
 },100 );

 document.querySelector('.terms_and_cons').style.opacity = "0";
  document.querySelector('.terms_and_cons').style.top = "-5px";

  setTimeout(function(){
 document.querySelector('.terms_and_cons').className = "terms_and_cons d_none"; 
document.querySelector('.link_forgot_pass').className = "link_forgot_pass d_block";

 },500);

  setTimeout(function(){

 document.querySelector('.link_forgot_pass').style.opacity = "1";
   document.querySelector('.link_forgot_pass').style.top = "5px";
    

for(var d = 0; d < inputs.length ; d++  ) {

switch(d) {
    case 1:
 console.log(inputs[d].name);
        break;
    case 2:
 console.log(inputs[d].name);

         break;
    default:
 document.querySelectorAll('.input_form_sign')[d].className = "input_form_sign";  
}
  }
   },1500);
   document.querySelector('.btn_sign').innerHTML = "SIGN IN";    
}


window.onload =function(){
  document.querySelector('.cont_centrar').className = "cont_centrar cent_active";

}


	</script>
</head>
<body>
<?php include 'dat.php';?>
<!--<div class="cont_principal">

  <div class="cont_centrar">
  <div class="cont_login">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="cont_tabs_login">
      <ul class='ul_tabs'>
        <li class="active"><a href="login.php" onclick="sign_in()">SIGN IN</a>
        <span class="linea_bajo_nom"></span>
        </li>
        <li><a href="register.php" onclick="sign_up()">SIGN UP</a><span class="linea_bajo_nom"></span>
        </li>
      </ul>
      </div>
  <div class="cont_text_inputs">
      <input type="text" class="input_form_sign " placeholder="NAME" name="name_us" />
    
    <input type="text" class="input_form_sign d_block active_inp" placeholder="EMAIL" name="emauil_us" />

    <input type="password" class="input_form_sign d_block  active_inp" placeholder="PASSWORD" name="pass_us" />  
   <input type="password" class="input_form_sign" placeholder="CONFIRM PASSWORD" name="conf_pass_us" />
    
    <a href="#" class="link_forgot_pass d_block" >Forgot Password ?</a>    
<div class="terms_and_cons d_none">
    <p><input type="checkbox" name="terms_and_cons" /> <label for="terms_and_cons">Accept  Terms and Conditions.</label></p>
  
    </div>
      </div>
<div class="cont_btn">
     <button class="btn_sign">SIGN IN</button>
      
      </div>
      
    </form>
    </div>
    
  </div>
  

</div>-->


<div class="cont_principal">

    <div class="cont_centrar cent_active">
        <div class="cont_login">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                 
             
                    <div class="cont_tabs_login">
                        <ul class="ul_tabs">
						    <li><a href="#" onclick="sign_up()">SignUp</a>
							<span class="linea_bajo_nom"></span></li>
                          <li class="active"><a href="index.php" onclick="sign_in()">SignIn</a>
						  <span class="linea_bajo_nom"></span></li>
                        
                        </ul>
                </div>
                        		   
			        <div class="cont_text_inputs">
                    <input type="text" class="input_form_sign" placeholder="NAME" name="name" value="<?php if($error) echo $name; ?>" class="form-control"/>
					                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>	


                    
                    
               
                        <input type="text" class="input_form_sign" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    

                    
                        <input type="password"  class="input_form_sign" name="password" placeholder="Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    

            
                 
                        <input type="password" class="input_form_sign" name="cpassword" placeholder="Confirm Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                  

                    <div class="form-group">
                        <input type="submit" name="signup" value="Sign Up" class="btn_sign" />
                    </div>
					</div>
           

            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
			            </form>
        </div>
    </div> 
  </div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>