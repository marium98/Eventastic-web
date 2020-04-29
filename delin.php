<?php
include("cs.php");
$id= $_GET['rn'];
$query= "DELETE FROM inquiry where ID= '$id'";
$data=mysqli_query($dbcon,$query);
if($data){
    echo "<script>alert('Record deleted')</script>";
    ?>
    <meta HTTP-EQUIV = "Refresh" CONTENT="0; URL=http://localhost/new/deleteinquiry.php">
    <?php
    }
    else{
        echo "<font color='red'>record not deleted";
    }
      
    ?>