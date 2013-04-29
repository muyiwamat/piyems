<?xml version="1.0" encoding = "UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title> Procastination Marketplace</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet"  type="text/css" href="css/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="javascript/jquery.js"></script>
<script type="text/javascript" src="javascript/jquery-ui-1.9.2.custom.js"></script>

<script>
$( document ).ready(function() {
   $(function() {
   $( "#featured" ).accordion({
   heightStyle: "content"
   });
   });
   });
</script>
</head>
<body>
   <div class="container">
   <div class="innerContainer">
   
    <?php include 'header.php'; ?>
    <?php include 'banner.php'; ?>
    
    
    <div class="content">
        <div id="holder">
         <h1> About Us </h1>
        <p> Muyiwa Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Sed leo erat, volutpat sed
            sollicitudin non, auctor non arcu. Proin
            interdum elementum dui a rhoncus. Nulla
            feugiat, leo eu sagittis tincidunt, nisl mi
            ullamcorper nisi, nec malesuada nibh
            lacus vitae enim. Mauris pharetra ligula a
            lacus sagittis tincidunt. Mauris suscipit
            commodo massa et fermentum. Sed
            sollicitudin lectus id mauris viverra non
            auctor lacus adipiscing. Praesent eu nibh
            ut mauris commodo varius. Praesent
            auctor cursus eros nec hendrerit. Ut
            semper venenatis commodo. Cras
            fringilla tincidunt justo, in condimentum
            massa blandit vel. Morbi quis porta leo.
            Cras suscipit ante eget lorem imperdiet
            non ullamcorper nisl vulputate. Nulla
            mollis tristique dui. elementum dui a
            rhoncus. Nulla feugiat, leo eu sagittis
            tincidunt, nisl mi ullamcorper nisi,
            elementum dui a rhoncus.
         </p>
        </div>
        <div id="app_holder">
         <h1> Apps of the Month</h1>
        <div id="featured">
             <h3>Unhappy Cats Reclaiming the Backstreets</h3>
             <div>
               <p>Price: $0.69</p>
               <p>Manufacturer: Maybe2moro</p>
               
               <p class="con">
               The pesky dogs are back, and they are taking over the streets! The cats need
               your help to reclaim the backstreets and get rid of the dogs once and for all!
               Rid the backstreets of unpleasant howls and barks that upset the neighbours,
               replacing them with peaceful, soothing, purrs of contented cats.  
               Featuring several new and challenging puzzles set around the backstreets of Cymric City,
               it'll take all your ingenuity to devise cunning traps, tricking the dogs into cages that
               they can be sent back to the pound.  
               </p>
               
             </div>
             
             <h3>F1 Car Designer</h3>
             <div>
               <p>Price: $10,000</p>
               <p>Manufacturer: Manana</p>
               <p class="con">
               You've seen them on TV! You've maybe even seen them in real life!
               You wish you could have one yourself, to speed through that morning
               commute to work! Well, we cannot quite give you that.  Instead, we offer
               you the next best thing: the ability to custom design your own F1 car, which,
               through the magic of 3D printing, we can produce for you, for a small fee.
               </p>
               
             </div>
             
             <h3>Later &#45; I have singing to do</h3>
             <div>
               <p>Price $4.99<p/>
               <p>Manufacturer:  A.DemaIn</p>
               <p class ="con">
               Everybody loves singing along with their favourite artist or song
               and now you can do it using just your phone!  Forget about that important job you
               have been dreading &#45; instead enjoy yourself with some karaoke.
               Since originating in Japan many years ago, karaoke has became a world wide phenomia
               that has taken the world by storm.  
               </p>
               
             </div>
        
        </div>
    </div>
    </div>
        
    <?php include 'footer.php'; ?>
    
   </div>
   </div> 

</body>

</html>