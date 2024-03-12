var inp1=document.getElementById("idnom");
var span1=document.getElementById("idspan");
inp1.addEventListener("focus",function () {
    span1.textContent="veuillez indiquer votre nom"
    span1.style.color="green"
    
}
);
inp1.addEventListener("blur",function () {
    if(inp1.value==""){
        span1.textContent="le champs est obligatoire";
        span1.style.color="red";
    }else{
        span1.textContent="";
        inp1.value=inp1.value.toUpperCase();
    }
    
})
var inpprenom=document.getElementById("idprenom");
var span2=document.getElementById("idspan2");
function focusnom() {
    span2.textContent="veuillez indiquer votre prenom"
    span2.style.color="green"
    
}
inpprenom.addEventListener("focus",focusnom);
function blurn() {
    if(inpprenom.value==""){
        span2.textContent="le champs est obligatoire";
        span2.style.color="red";
    }else{
        span2.textContent="";
        inpprenom.value=inpprenom.value.substring(0,1).toUpperCase()
        +inpprenom.value.substring(1).toLowerCase();
    }
    
}
inpprenom.addEventListener("blur",blurn);
var mdp=document.getElementById("idmdp");
var spmdp=document.getElementById("spanmdp");
mdp.addEventListener("input",function () {
    if(mdp.value.length<4){
        spmdp.textContent="faible";
        spmdp.style.color="red";
        mdp.style.color="red";
    }else if(mdp.value.length>=4 && mdp.value.length<8 ){
        spmdp.textContent="moyen";
        spmdp.style.color="orange"
        mdp.style.color="orange"
    }else{
        spmdp.textContent="fort";
        spmdp.style.color="green";
        mdp.style.color="green";
    }
})
// validation de l'email
var email1=document.getElementById("idemail");
var spemail=document.getElementById("spanemail");
email1.addEventListener("input",function () {
    if (email1.value.indexOf("@")!=-1) {
        spemail.textContent="email valider";
        spemail.style.color="green";
    } else {
        spemail.textContent="email n'est pas valider";
        spemail.style.color="red";
    }
})
