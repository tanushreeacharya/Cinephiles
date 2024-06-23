<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Sign up</title>
</head>
<body>
   
    <div class="signup-box">
      <div class="homebutton">
        <button class="homebtn" onclick="window.location.href='index.html'"><i class="fa fa-home" style="font-size:30px ;"></i></button>
      </div><br><br>
        <h2 style="font-family: 'Kalam', cursive;">Sign up</h2>
        <form name="RegForm" onsubmit="return login_js()" method="post" action="displaysu.php">

            <label for="username">Username</label>
            <input type="text" placeholder="Username" id="username" name="username" required>

            <label for="emailorphone">Email Id</label>
            <input type="text" placeholder="Email" id="email"  name="email" required>

            <label for="password">Password</label>
            <input type="password" placeholder="Password" id="password" name="password" required>

            <button class="signupbtn" type="submit">Sign up</button>
            <!-- <div class="social">
              <div class="go"><i class="fa fa-google"></i>  Google</div>
              <div class="fb"><i class="fa fa-facebook"></i>  Facebook</div>
            </div> -->
            <br><br>
            <div class="alreadyacc" style="text-align: center;">
                <a style="color:white;" href="login.php">Already have an account? Login</a>
            </div>
        </form>
    </div>

    
</body>
<script type="text/javascript">
  function login_js(){
   var user = document.getElementById("username").value;
   var pass = document.getElementById("password").value;
   var e = document.getElementById("email").value;

   var u_val = /^[A-Za-z0-9]*$/  
   var email_val = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;  
   
   if(!u_val.test(user)){  
        alert('Username is incorrect. Must contain alphabets and numbers only');  
       return false;
       }
   if(!email_val.test(e)){  
        alert('Invalid email format. Please enter valid email id'); 
       return false; 
        }  
   if(pass.length < 6){  
       alert("Password minimum length is 6");  
       return false;
       }  
   if(pass.length > 12) {  
       alert("Password has reached it's maximum limit!!!");  
       return false;
       }  
   else{  
       alert("Your account has been created successfully");  
      //  RegForm.submit()
      //  alert("Go back to home page?");
      //  window.location("index.html");
       }
  }
</script>
</html>

