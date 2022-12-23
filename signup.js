// regex variablex
const usernameRegex = /^[A-Za-z0-9]{1,20}$/;
const emailRegex = /^[^@]+@[^@.]+.[a-z]+$/i;
const passwordRegex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,}$/;;
// input values variables
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");

const emailValidator = () => {
    const emailIsValid = emailRegex.test(email.value);
    emailIsValid? console.log("Email eshte mire") : console.log("Email eshte gabim");
    return emailIsValid
}
const usernameValidator = () => {
    const usernameIsValid = usernameRegex.test(username.value);
    usernameIsValid ? console.log("Username eshte mire") : console.log("Username eshte gabim");
    return usernameIsValid
}
const passwordValidator = () => {
    const passwordIsValid = passwordRegex.test(password.value);
    passwordIsValid ? console.log("Password eshte mire") : console.log("Password eshte gabim");
    return passwordIsValid
}

document.querySelector("form").addEventListener("submit", e => {
    if(!emailValidator()){
        e.preventDefault();
    }

    if(!usernameValidator()){
        e.preventDefault();
    }

    if(!passwordValidator()){
        e.preventDefault();
    }
    if(password.value !== confirmPassword.value){
        console.log("Password nuk perputhet");
        e.preventDefault();
    }
})