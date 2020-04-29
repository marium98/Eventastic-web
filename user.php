<?php

if (isset($_POST['submit'])) {

if(empty($_POST['name'])) {
die("Fill in the name field.");
}

if(empty($_POST['email'])) {
die("Fill in the email field.");
}

  
  include('cs.php');

$name = mysqli_real_escape_string($dbcon,trim($_POST['name']));
$email = mysqli_real_escape_string($dbcon,trim($_POST['email']));

    $sqlinsert = "INSERT INTO `USER` (NAME,EMAIL) VALUES ('" . $name . "','" . $email . "')";

    if (!mysqli_query($dbcon, $sqlinsert)) {
        die('error inserting new record');
        } //end of nested if

        echo "1 record added to the database";


} // end of the main if statement
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="max-width:500px;margin:auto"> 
<div class="input-container">
   <i class="fa fa-user icon"></i>
   <input class="input-field" type="text" placeholder="Username" name="name">
 </div>

 <div class="input-container">
   <i class="fa fa-envelope icon"></i>
   <input class="input-field" type="text" placeholder="Email" name="email">
 </div>

 <button type="submit" class="btn" name="submit" style= "width:90px;">Submit</button>
</form>