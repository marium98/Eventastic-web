<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 260px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}
.sidebar .active{
    color : blue;
    background: #111;
}
.main {
  margin-left: 260px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}
#view {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#view td, #view th {
  border: 1px solid #ddd;
  padding: 8px;
}

#view tr:nth-child(even){background-color: #f2f2f2;}

#view tr:hover {background-color: #ddd;}

#view th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidebar">
  <a href="admin.php" class="active"> VIEW CONTACT FORM</a>
  <a href="updatecontact.php">UPDATE CONTACT FORM</a>
  <a href="deletecontact.php">DELETE CONTACT FORM</a>
  <a href="viewinquiry.php">VIEW INQUIRY FORM</a>
  <a href="updateinquiry.php">UPDATE INQUIRY FORM</a>
  <a href="deleteinquiry.php">DELETE INQUIRY FORM</a>
  <a href="logout.php">LOG OUT?</a>
</div>

<div class="main">
  <h2>ADMIN SPACE: </h2>
  <h2>VIEW CONTACT FORM</h2>
  <table id="view">
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>COUNTRY</th>
    <th>SUBJECT</th>
  </tr>
<?php 
$conn = mysqli_connect("localhost","root","","eventastics");
if($conn -> connect_error){
    die("connection failed: " . $conn -> connect_error);
}
  $sql = "select ID , NAME ,EMAIL ,COUNTRY , SUBJECT FROM contact";
  $result = $conn -> query($sql); 
  if($result -> num_rows > 0){
      while($row = $result -> fetch_assoc()){
          echo "<tr><td>" . $row["ID"] ."</td><td>" . $row["NAME"] . "</td><td>" . $row["EMAIL"] . "</td><td>" . $row["COUNTRY"] . "</td><td>" . $row["SUBJECT"] . "</td></tr>";
      }
      echo "</table>";
  }
  else{
      echo "0 result";
  }
  $conn -> close();
  ?>
  </table>
  </div>
     
</body>
</html> 