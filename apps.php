<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title> Procastination Marketplace | Apps</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'/>
<script type="text/javascript" src="javascript/scripts.js"></script>

</head>
<body background="music_back.png">

<div class="container">
<div class="innerContainer">
  
  <?php include 'header.php'; ?>
  <?php include 'banner.php'; ?>


<div class="content">
<div class="devs">
<h1>App List</h1>
  <div class="dev_tab">
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
  
  echo "<table cellspacing='2' border='1' style= 'border-color:#008387;'>
   <tr>
   <th>Name</th>
   <th>Description</th>
   <th>Developer</th>
   <th>Price</th>
   </tr>";
   
  while($row = mysql_fetch_array($result))
  {
    echo '<tr class="dev_info_odd">';
        echo '<td><img src="'.$row['ImageURL'].'" width="200" alt="alternate name"/><h3>'.$row['Name'].'</h3></td>';
    echo "<td>".$row['Description']."</td>";
    echo "<td>".$row['Price']."</td>";
    echo "<td>".$row['Developer']."</td>";
    echo "</tr>";
    
  }
  
  echo "</table>";
  
  mysql_close($con);
 ?>
    
  </div>
</div>
</div>
<?php include 'footer.php'; ?>
</div>
</div>


</body>
</html>