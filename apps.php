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
<div class="appx">
<h1>App List</h1>
  
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
  
  echo "<table border='1' style= 'border-color:#008387;'>
   <tr>
   <th>Name</th>
   <th>Description</th>
   </tr>";
   
  while($row = mysql_fetch_array($result))
  {
    echo '<tr class="dev_info_odd">';
        echo '<td width="170px"><h3>'.$row['Name'].'</h3><img src="'.$row['ImageURL'].'" width="200" alt="alternate name"/><p style="color:red;">Price: $ '.$row['Price'].'</p><p>Developed by: '.$row['Developer'].'</p></td>';
    echo '<td>'.$row['Description'].'</td>';
    echo "</tr>";
    
  }
  
  echo "</table>";
  
  mysql_close($con);
 ?>
    
  
</div>
</div>
<?php include 'footer.php'; ?>
</div>
</div>


</body>
</html>