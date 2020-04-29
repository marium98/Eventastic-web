<?php
include("cs.php");
$id= $_GET['rn'];
$query= "DELETE FROM contact where ID= '$id'";
$data=mysqli_query($dbcon,$query);
if($data){
    echo "<script>alert('Record deleted')</script>";
?>
<meta HTTP-EQUIV = "Refresh" CONTENT="0; URL=http://localhost/new/deletecontact.php">
<?php
}
else{
    echo "<font color='red'>record not deleted";
}
  
?>