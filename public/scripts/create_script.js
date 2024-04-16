const createForm = document.getElementById("createForm");
const createLogin = document.getElementById("createLogin");
const createPwd = document.getElementById("createPwd");
const confirmPwd = document.getElementById("confirmPwd")
const createSubmit = document.getElementById("createSubmit");


createForm.addEventListener("submit", function(event){
    event.preventDefault();
});

createSubmit.addEventListener("click", checkCreate);

function checkCreate() {
    let pwd1 = createPwd.value;
    let pwd2 = confirmPwd.value;
    let nom = createLogin.value;

    pwd1 != pwd2 ? alert("Passwords don't match") : 
                    /\d/.test(nom) ? alert("Enter your name correctly") :
                         /[!@#$%^"/=:.?<>&,;*()_+]/.test(nom) ? alert("Enter your name correctly") :
                            createForm.submit();
}




