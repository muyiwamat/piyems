<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Procastination Marketplace | Apps</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="javascript/scripts.js"></script>

</head>
<body background="music_back.png">

<div class="container">
<div class="innerContainer">
  
  <?php include 'header.php'; ?>
  <?php include 'banner.php'; ?>


<div class="content">
  <div id="apps">
    <?php
// Create connection
$con=mysql_connect("hawk.csd.abdn.ac.uk","wtstudent","DyNEDurA");

// Check connection
if (!$con)
  {
  die("Failed to connect to MySQL: " . mysql_error());
  }
  
  mysql_select_db("webtech", $con);
  $result = mysql_query("SELECT Name, Description, Price, Developer, ImageURL FROM apps");
  while($row = mysql_fetch_array($result)) {
    echo $row['Name'];
    echo $row['Description'];
    echo $row['Price'];
    echo $row['Developer'];
    echo $row['ImageURL'];
  }
  mysql_close($con);
 ?>
    
  </div>

</div>
<?php include 'footer.php'; ?>
</div>
</div>


</body>
</html>