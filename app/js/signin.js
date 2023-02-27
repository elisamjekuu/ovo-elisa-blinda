// regex variablex
const usernameRegex = /^[A-Za-z0-9]{1,20}$/;
const passwordRegex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;;
// input values variables
const username = document.getElementById("username");
const password = document.getElementById("password");

const usernameValidator = () => {
    const usernameIsValid = usernameRegex.test(username.value);
    usernameIsValid ? console.log("Username eshte mire") : alert("Username eshte gabim");
    return usernameIsValid
}
const passwordValidator = () => {
    const passwordIsValid = passwordRegex.test(password.value);
    passwordIsValid ? console.log("Password eshte mire") : alert("Password eshte gabim");
    return passwordIsValid
}

document.querySelector("form").addEventListener("submit", e => {
    if(!usernameValidator()){
        e.preventDefault();
    }

    if(!passwordValidator()){
        e.preventDefault();
    }
})