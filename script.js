const signInbtn = document.getElementById("SignInbtn");
const signup = document.getElementById("SignUpbtn");
const SignInForm = document.getElementById("SignIn");
const SignUpForm = document.getElementById("SignUp");

signup.addEventListener('click', function () {
    SignInForm.style.display = "none";
    SignUpForm.style.display = "block";
});

signInbtn.addEventListener('click', function () {
    SignInForm.style.display = "block";
    SignUpForm.style.display = "none";
});



function fadeOutForm() {
    SignInForm.style.transition = "opacity 1s ease";
    SignInForm.style.opacity = "0";
    setTimeout(function () {
       
        document.querySelector(".success-message").style.display = "block";
    }, 1000);
}
