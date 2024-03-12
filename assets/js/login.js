var mdp1=document.getElementById("password");
var spn1=document.getElementById("idspan");
var eye1=document.getElementById("eye");
var eyes1=document.getElementById("eyes");
spn1.addEventListener("click",function () {
    if (mdp1.type=="password") {
        mdp1.type="text";
        eye1.style.display="none";
        eyes1.style.display="inline";
    } else {
        mdp1.type="password";
        eyes1.style.display="none";
        eye1.style.display="inline";
    }
})