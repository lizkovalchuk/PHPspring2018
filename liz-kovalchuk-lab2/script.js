/*
    APPROACH:
    -store necessary values in variables
    -create a boolean
    -validate user input with else/if statements
 */

// DECLARE VARIABLES

var userType = document.getElementById('form__input_user');
var userOption = userType.options[userType.selectedIndex].text;
var userName = document.getElementById('form__input_name').value;
var userEmail = document.getElementById('form__input_email').value;
var emailRegEx = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
var ok = true;


function button1() {
     userType = document.getElementById('form__input_user');
     userOption = userType.options[userType.selectedIndex].text;
     userName = document.getElementById('form__input_name').value;
     userEmail = document.getElementById('form__input_email').value;

    if (userOption === "- Select One -") {
        document.getElementById("form__input_user").focus();
        ok = false;
    }
    if (userName === "") {
        document.getElementById("form__input_name").focus();
        ok = false;
    }
    if (userEmail === "") {
        document.getElementById("form__input_email").focus();
        ok = false;
    }
    else {
        checkEmail();
        if (checkEmail() === false) {
            ok = false;
        } else {
            ok = true;
        }
    }
    return ok;
} //end of button1 function

// RegEx in checkEmail function

    function checkEmail() {
        if (emailRegEx.test(userEmail)) {
            return true;
        }
        else {
            ok = false;
        }
} //end of checkEmail function