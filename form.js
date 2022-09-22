var firstName, lastName, mobileNumber, email, password, confirmPassword, country_code, employee_id, user_type, employee_id_div;

firstName = document.getElementById("firstname");
lastName = document.getElementById("lastname");
mobileNumber = document.getElementById("mobile_number");
email = document.getElementById("email");
password = document.getElementById("password");
confirmPassword = document.getElementById("confirm_password");
country_code = document.getElementById("country_code");
employee_id = document.getElementById("employee_id");

function validation() {
    firstName = document.getElementById("firstname");
    lastName = document.getElementById("lastname");
    mobileNumber = document.getElementById("mobile_number");
    email = document.getElementById("email");
    password = document.getElementById("password");
    confirmPassword = document.getElementById("confirm_password");
    country_code = document.getElementById("country_code");
    employee_id = document.getElementById("employee_id");
    if (firstName.value == "") {
        firstName.focus();
        firstName.setAttribute("placeholder", "FirstName cannot be empty");
        firstName.setAttribute("style", "box-shadow: 0 0 4px 0.2rem red;");
        return false;
    }
    if (firstName.value != "") {
        firstName.setAttribute("style", "box-shadow:none;");
    }
    if (lastName.value == "") {
        lastName.focus();
        lastName.setAttribute("style", "box-shadow: 0 0 4px 0.2rem red;");
        lastName.setAttribute("placeholder", "LastName cannot be empty");
        return false;
    }
    if (lastName.value != "") {
        lastName.setAttribute("style", "box-shadow:none;");

    }

    if (country_code.value == "") {
        country_code.focus();
        country_code.setAttribute("style", "box-shadow: 0 0 4px 0.2rem red;");
        country_code.setAttribute("placeholder", "Mobile Number cannot be empty");
        return false;
    }
    if (country_code.value != "") {
        country_code.setAttribute("style", "box-shadow:none;");

    }

    if (mobileNumber.value == "") {
        mobileNumber.focus();
        mobileNumber.setAttribute("style", "box-shadow: 0 0 4px 0.2rem red;");
        mobileNumber.setAttribute("placeholder", "Mobile Number cannot be empty");
        return false;
    }
    if (mobileNumber.value != "") {
        mobileNumber.setAttribute("style", "box-shadow:none;");

    }
    if (email.value == "") {
        email.focus();
        email.setAttribute("style", "box-shadow: 0 0 4px 0.2rem red;");
        email.setAttribute("placeholder", "Email cannot be empty");
        return false;
    }
    if (email.value != "") {
        email.setAttribute("style", "box-shadow:none;");

    }
    if (password.value == "") {
        password.focus();
        password.setAttribute("style", "box-shadow: 0 0 4px 0.2rem red;");
        password.setAttribute("placeholder", "Password cannot be empty");
        return false;
    }
    if (password.value != "") {
        password.setAttribute("style", "box-shadow:none;");

    }
    if (confirmPassword.value == "") {
        confirmPassword.focus();
        confirmPassword.setAttribute("style", "box-shadow: 0 0 4px 0.2rem red;");
        confirmPassword.setAttribute("placeholder", "Confirm Password cannot be empty");
        return false;
    }
    if (confirmPassword.value != password.value) {
        password.focus();
        password.setAttribute("style", "box-shadow: 0 0 4px 0.2rem red;");
        password.setAttribute("placeholder", "Password not matched !");
        confirmPassword.focus();
        confirmPassword.setAttribute("style", "box-shadow: 0 0 4px 0.2rem red;");
        password.value = confirmPassword.value = "";
        confirmPassword.setAttribute("placeholder", "Password not matched !");
        return false;
    }

}
function removeBorder1() {
    lastName.setAttribute("style", "box-shadow:none;");
    mobileNumber.setAttribute("style", "box-shadow:none;");
    email.setAttribute("style", "box-shadow:none;");
    password.setAttribute("style", "box-shadow:none;");
    confirmPassword.setAttribute("style", "box-shadow:none;");
    country_code.setAttribute("style", "box-shadow:none;");
    employee_id.setAttribute("style", "box-shadow:none;");
    firstName.style.border = "1px solid #ced4da";
    firstName.setAttribute("style", "box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);");
}
function removeBorder2() {
    firstName.setAttribute("style", "box-shadow:none;");
    mobileNumber.setAttribute("style", "box-shadow:none;");
    email.setAttribute("style", "box-shadow:none;");
    password.setAttribute("style", "box-shadow:none;");
    confirmPassword.setAttribute("style", "box-shadow:none;");
    country_code.setAttribute("style", "box-shadow:none;");
    employee_id.setAttribute("style", "box-shadow:none;");
    lastName.style.border = "1px solid #ced4da";
    lastName.setAttribute("style", "box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);");
}
function removeBorder3() {
    lastName.setAttribute("style", "box-shadow:none;");
    firstName.setAttribute("style", "box-shadow:none;");
    email.setAttribute("style", "box-shadow:none;");
    password.setAttribute("style", "box-shadow:none;");
    confirmPassword.setAttribute("style", "box-shadow:none;");
    country_code.setAttribute("style", "box-shadow:none;");
    employee_id.setAttribute("style", "box-shadow:none;");
    mobileNumber.style.border = "1px solid #ced4da";
    mobileNumber.setAttribute("style", "box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);");
}
function removeBorder4() {
    lastName.setAttribute("style", "box-shadow:none;");
    mobileNumber.setAttribute("style", "box-shadow:none;");
    firstName.setAttribute("style", "box-shadow:none;");
    password.setAttribute("style", "box-shadow:none;");
    confirmPassword.setAttribute("style", "box-shadow:none;");
    country_code.setAttribute("style", "box-shadow:none;");
    employee_id.setAttribute("style", "box-shadow:none;");
    email.style.border = "1px solid #ced4da";
    email.setAttribute("style", "box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);");
}
function removeBorder5() {
    lastName.setAttribute("style", "box-shadow:none;");
    mobileNumber.setAttribute("style", "box-shadow:none;");
    email.setAttribute("style", "box-shadow:none;");
    firstName.setAttribute("style", "box-shadow:none;");
    confirmPassword.setAttribute("style", "box-shadow:none;");
    country_code.setAttribute("style", "box-shadow:none;");
    employee_id.setAttribute("style", "box-shadow:none;");
    password.style.border = "1px solid #ced4da";
    password.setAttribute("style", "box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);");
}
function removeBorder6() {
    lastName.setAttribute("style", "box-shadow:none;");
    mobileNumber.setAttribute("style", "box-shadow:none;");
    email.setAttribute("style", "box-shadow:none;");
    password.setAttribute("style", "box-shadow:none;");
    firstName.setAttribute("style", "box-shadow:none;");
    country_code.setAttribute("style", "box-shadow:none;");
    employee_id.setAttribute("style", "box-shadow:none;");
    confirmPassword.style.border = "1px solid #ced4da";
    confirmPassword.setAttribute("style", "box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);");
}
function removeBorder7() {
    lastName.setAttribute("style", "box-shadow:none;");
    mobileNumber.setAttribute("style", "box-shadow:none;");
    email.setAttribute("style", "box-shadow:none;");
    password.setAttribute("style", "box-shadow:none;");
    firstName.setAttribute("style", "box-shadow:none;");
    employee_id.setAttribute("style", "box-shadow:none;");
    country_code.style.border = "1px solid #ced4da";
    country_code.setAttribute("style", "box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);");

}
user_type = document.getElementById("user_type");
employee_id_div = document.getElementById("employee_id_div");
function hide_employee_id() {
    if (user_type.value == "Super User") {
        employee_id_div.style.display = "none";
    }
    else {
        employee_id_div.style.display = "block";
    }
}