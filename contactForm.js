// regex variablex
const nameRegex = /^[A-Za-z0-9]{1,20}$/;
const emailRegex = /^[^@]+@[^@.]+.[a-z]+$/i;
// input values variables
const name = document.getElementById("name");
const email = document.getElementById("email");

const emailValidator = () => {
    const emailIsValid = emailRegex.test(email.value);
    emailIsValid? console.log("Email eshte mire") : console.log("Email eshte gabim");
    return emailIsValid
}
const usernameValidator = () => {
    const usernameIsValid = nameRegex.test(name.value);
    usernameIsValid ? console.log("Username eshte mire") : console.log("Username eshte gabim");
    return usernameIsValid
}

document.querySelector("form").addEventListener("submit", e => {
    if(!emailValidator()){
        e.preventDefault();
    }

    if(!usernameValidator()){
        e.preventDefault();
    }
})