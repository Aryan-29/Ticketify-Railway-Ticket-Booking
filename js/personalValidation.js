function validateForm() {
    console.log('Heelo');
    var form = document.querySelector(".form-group-personal");
    var fname = document.querySelector(".name");
    var gender = document.querySelector(".gender1");
    var email = document.querySelector(".email");
    var mobile = document.querySelector(".phone_number");
    var age = document.querySelector(".age");


    if (fname.value === '') {
        alert("Name is required");
        fname.focus();
        return false;
    }
    if (!gender.value) {
        alert("Gender is required");
        gender.focus();
        return false;
    }

    if (email.value === '') {
        alert("Email Id is required");
        email.focus();
        return false;
    }
    if (mobile.value < 10 ) {
        console.log('hfsdf');
        alert("Mobile number should be 0-10");
        mobile.focus();
        return false;
    }
    if (age.value === '') {
        alert("Age number is required");
        mobile.focus();
        return false;
    }
    return true
}