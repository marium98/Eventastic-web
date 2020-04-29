<?php
include("cs.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = mysqli_real_escape_string($dbcon,$_POST['name']);
    $email= mysqli_real_escape_string($dbcon,$_POST['email']);
    $password = mysqli_real_escape_string($dbcon,$_POST['password']);

    $sql="select ID from admin where NAME = '$name' and PASSWORD = '$password'";
    $result = mysqli_query($dbcon,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active= $row['active'];

     $count= mysqli_num_rows($result);
     if($count==1){
         $_SESSION['login_user'] = $name;
         header("location: admin.php");
     }

     else{
         $error = " yoyr login r pass is invalid";
     }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    
</head>
<body>
<h1>For Admin Use Only</h1>

<button class="button button2"><a href="home.php">Go Back To The Main Page</a></button>

<div class="loginbox">
    <img src="https://cdn5.vectorstock.com/i/1000x1000/73/04/female-avatar-profile-icon-round-woman-face-vector-18307304.jpg" class="user">
    <h2>LOGIN HERE</h2>
    <form method="post" action="">
 <p><label for="name">Username:</label></p>
 <p><input type="text" name="name" value="" placeholder="Enter your name" required></p>
 
 <p><label for="email">Email:</label></p>
 <p><input type="email" name="email" value="" placeholder="Enter your email" required></p>
 
 <p><label for="password">Password:</label></p>
 <p><input type="password" name="password" value="" placeholder="Enter your password" required></p>
 
 <p><button type="submit" name="submit">Login</button></p>
 
</form>
</div>


</body>
</html>