function validateForm() {
    if (false == validate_required(
    document.forms["contactForm"]["name"], "Please enter your name")) {
        return false;
    }
    
    if (false == validate_email(
    document.forms["contactForm"]["email"], "Valid email must be supplied")) {
        return false;
    }
    
     if (false == validate_required(
    document.forms["contactForm"]["message"], "You did not enter any comments")) {
        return false;
    }
    
    
    
    return true;
}



function validate_required(field, alerttxt) {
    if (field.value == null || field.value == "") {
        alert(alerttxt);
        return false;
    }
    else {
        return true;
    }
}

function validate_email(field, alerttxt) {
    atpos = field.value.indexOf("@");
    dotpos = field.value.lastIndexOf(".");
    if (atpos<3 || dotpos<atpos+4 || dotpos+2>=field.value.length) {
        alert(alerttxt);
        return false;
    } else {
        return true;
    }
}




