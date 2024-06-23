<!DOCTYPE html>
<html lang="en">
<head>

<title>Display User Data</title>
<style>

.data {
position: absolute;
display:flex-box;
top: 50%;
left: 50%;
width: 480px;
height: 340px;
padding: 1px 20px 20px 35px;
transform: translate(-50%, -50%);
background: #BF1922;
box-sizing: border-box;
box-shadow: 0 15px 25px rgba(0,0,0,.6);
border-radius: 10px;
}

p{
   color:white;
   font-size:20px;
   text-align:center;

}

/* h2{
    size: 7px;
    text-align:center;
} */

/* .signup-box h2 {
margin: 0 0 30px;
padding: 0;
color: #fff;
text-align: left;
}

.signup-box {
position: relative;
} */

.ok{
margin-top: 50px;
width: 100%;
background-color: #ffffff;
color: #BF1922;
padding: 15px 0;
font-size: 18px;
font-weight: 600;
border-radius: 5px;
cursor: pointer;
text-align:center;

}

</style>
</head>
<body>
    <div class= "data">
    <h1>Your data has been registered !</h1><br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];

        echo "<p><strong>Username:</strong> $username</p>";
        echo "<p><strong>Email Id:</strong> $email</p>";
        
    }
    ?>

    <br>
    <div class="ok">OK</div>
    </div>
</body>
</html>
