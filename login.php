<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username and password
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate username and password (you can add more validation here)
    if (empty($username) || empty($password)) {
        // Handle empty fields
        header("Location: login.php?error=emptyfields");
        exit();
    }

    // You can hardcode a username and password for demonstration purposes
    $validUsername = "sanika";
    $validPassword = "sanika12";

    if ($username === $validUsername && $password === $validPassword) {
        // Authentication successful
        $_SESSION["username"] = $username;

        // Set a cookie with a username that expires in 1 hour (adjust as needed)
        setcookie("username", $username, time() + 60, "/");

        // Redirect to the login page with a success parameter
        header("Location: login.php?success=1");
        exit();
    } else {
        // Authentication failed
        header("Location: login.php?error=loginfailed");
        exit();
    }
}
    // Check if the 'success' parameter is set in the URL
        if (isset($_GET["success"]) && $_GET["success"] == 1) {
            echo '
            <div id="loginSuccessPopup" class="popup">
                <div class="popup-content">
                    <p>Login successful!</p>
                    <button onclick="redirectToHomePage()">Go to Home Page</button>
                </div>
            </div>
            <link rel="stylesheet" type="text/css" href="styles.css">
            ';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="login-box">
      <div class="homebutton">
        <button class="homebtn" onclick="window.location.href='index.html'"><i class="fa fa-home" style="font-size:30px ;"></i></button>
      </div>
      <form name="RegForm" onsubmit="return login_js()" method="post" action="login.php"><br><br>
        <h2 style="font-family: 'Kalam', cursive;">Login</h2>
            <label for="username">Username</label>
            <input type="text" placeholder="Username" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" placeholder="Password" id="password" name="password" required>

            <button class="loginbtn">Log In</button>
            <!-- <div class="social">
              <div class="go"><i class="fa fa-google"></i>  Google</div>
              <div class="fb"><i class="fa fa-facebook"></i>  Facebook</div>
            </div> -->
            
            <br><br>
            <div class="noacc" style="text-align: center;">
              <a style="color:white;" href="signup.php">Don't have an account? Sign up</a>
            </div>

            <!-- <div id="loginSuccessPopup" class="popup">
                <div class="popup-content">
                    <p>Login successful!</p>
                    <button onclick="redirectToHomePage()">Go to Home Page</button>
                </div>
            </div> -->
      </form>    
    </div>

</body> 
<script type="text/javascript">
    function login_js() {
    var user = document.getElementById("username").value;
    var pass = document.getElementById("password").value;
    var popup = document.getElementById("loginSuccessPopup");

    var u_val = /^[A-Za-z0-9]*$/;

    if (!u_val.test(user)) {
        alert('Username is incorrect. Must contain alphabets and numbers only');
        return false;
    }
    if (pass.length < 6) {
        alert("Password minimum length is 6");
        return false;
    }
    if (pass.length > 12) {
        alert("Password has reached its maximum limit!!!");
        return false;
    } else {
        popup.style.display = "grid";
        return false; 
    }
}

function redirectToHomePage() {
    window.location.href = "index.html";
}

document.addEventListener("DOMContentLoaded", function() 
{
    document.getElementById("loginSuccessPopup").classList.add("show");
});
document.addEventListener("DOMContentLoaded", function() {
    var loginError = <?php echo isset($_GET["error"]) && $_GET["error"] === "loginfailed" ? "true" : "false"; ?>;
    if (loginError) 
    {
        alert("Invalid login credentials");
    }
});
</script>

</html>





