<?php
  include("cs.php");

 
?>
<!DOCTYPE html>
<html>
<head>
<title>Eventastics</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  @charset "utf-8";
body {font-family: Arial, Helvetica, sans-serif;

}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: #41C379;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid #41C379;
}

/* Set a style for the submit button */
.btn {
  background-color: #41C379;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<div class="container1">
    <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="max-width:500px;margin:auto"> 
 
    <div class="input-container">
    <i class="fa fa-question icon"></i>
    <input class="input-field" type="text" placeholder="userid" name="id" value="<?php echo $_GET['rn']; ?>">
  </div>

 <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="name" value="<?php echo $_GET['em']; ?>">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" value="<?php echo $_GET['e']; ?>">
  </div>
 
  <div class="input-container">
    <i class="fa fa-comment icon"></i>
 <input class="input-field" type="text" name="comments" rows="5" cols="90" placeholder="comments" value="<?php echo $_GET['c']; ?>">
  </div>

  <button type="submit" class="btn" name="submit"style="width:90px;margin-left:100px;">Update</button>
  </form>
 <?php 
 if (isset($_GET['submit'])) {
    $id=$_GET['id'];
    $name=$_GET['name'];
    $email=$_GET['email'];
    $comments=$_GET['comments'];
      $query = "UPDATE inquiry set NAME = '$name' ,EMAIL='$email' ,COMMENTS='$comments' WHERE ID='$id'";
      $data=mysqli_query($dbcon,$query);
if($data){
    echo "<font color='green'>record update successfully <a href='updateinquiry.php'>Check Updated list here</a>'";
}
else{
    echo "<font color='red'>record not update";
}
  }
  else{
      echo "<font color='red'>click on update button to save the changes";
  }
?> 
</body>
</html>
