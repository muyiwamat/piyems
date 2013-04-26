function validateForm()
{
    var required=document.forms["contactForm"]["name"].value;
    var required2=document.forms["contactForm"]["message"].value;
    var valid_email =document.forms["contactForm"]["email"].value;
    var atpos=valid_email.indexOf("@");
    var dotpos=valid_email.lastIndexOf(".");
    
    if (required==null || required=="")
      {
      alert("Please fill in your name");
      return false;
  }

    if (atpos<4 || dotpos<atpos+2 || dotpos+2>=valid_email.length)
      {
      alert("Please enter a valid e-mail address");
      return false;
      }
    
    if (required2==null || required2=="")
      {
      alert("Please enter comment");
      return false;
  }
}


