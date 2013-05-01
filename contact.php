<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Procastination Marketplace | Contact</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Quicksand:700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="javascript/jquery.js"></script>
<script type="text/javascript" src="javascript/validation.js"></script>

</head>
<body background="music_back.png">

<div class="container">
<div class="innerContainer">
  
  <?php include 'header.php'; ?>
  <?php include 'banner.php'; ?>

  

<div class="content">
 
  <div id="contact_holder">
    <h1>Contact us by email</h1>
        <form id="contactForm" method="post" action="post.php">
        
        <p><label for="name">Name: </label><input type="text" name="name" id="name" size ="40"></p>
        <p><label for="email">Email: </label> <input type="text" name="email" id="email" size ="40"></p>
        <b class="error">e.g myemail@example.com</b>
        <p><label for="message">Comments:</label></p><textarea name="message" id="message" rows="6" cols="40"></textarea></p>
        <p class="error">Some errors were found</p>
        <p><input type="submit" value="Submit" class="submit">
        <input type="reset" value="Clear form" class="submit"></p>
        </fieldset>
            
        <input type="hidden" name="username" value="t02mam12">
        <input type="hidden" name="webmasteremail" value="m.a.matuluko.12@aberdeen.ac.uk">
        <input type="hidden" name="homepage" value="www.abdn.ac.uk/~t02mam12/">
        </form>
        <p> </p>
</div>
  
<div id="map">
   <h1>Find us</h1>
 <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?q=university+of+aberdeen&amp;oe=utf-8&amp;aq=t&amp;client=firefox-a&amp;ie=UTF8&amp;hl=en&amp;hq=university+of+aberdeen&amp;hnear=Aberdeen,+Aberdeen+City,+United+Kingdom&amp;ll=57.164013,-2.10169&amp;spn=0.037143,0.077162&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=5627882725791673152&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.uk/maps?q=university+of+aberdeen&amp;oe=utf-8&amp;aq=t&amp;client=firefox-a&amp;ie=UTF8&amp;hl=en&amp;hq=university+of+aberdeen&amp;hnear=Aberdeen,+Aberdeen+City,+United+Kingdom&amp;ll=57.164013,-2.10169&amp;spn=0.037143,0.077162&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=5627882725791673152&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
</div>



</div>
<?php include 'footer.php'; ?>
</div>
</div>


</body>
</html>