//Modifiez la couleur du texte avec Javascript. Il doit y avoir plusieurs façons de faire...
document.getElementById("div1").style.color = "blue";
document.getElementById("div1").style.textAlign = "center";


//Ajouter une propriété css
document.querySelector("div").style.backgroundColor = "pink";


//Ajoutez une balise contenant du texte. 
let crea = document.createElement("div");
crea.id = "div2";
crea.textContent = "Comment allez-vous ?";
document.getElementById("idBody").appendChild(crea);


//Inverser les contenus des 2 balises.
let temp1 = document.getElementById("div1").innerHTML;
let temp2 = document.getElementById("div2").innerHTML;
let div1 = document.getElementById("div2").innerHTML = temp1;
let div2 = document.getElementById("div1").innerHTML = temp2;

//Deplacer les balises
let deplace1 = document.getElementById("div1").style.textAlign = "left";
let deplace2 = document.getElementById("div2").style.textAlign = "right";


//Ajouter 3 div



let crea1 = document.createElement("div");
crea1.textContent= "Je vais bien";
document.getElementById("idBody").appendChild(crea1);

let crea2 = document.createElement("div");
crea2.textContent= "Merci et vous ?";
document.getElementById("idBody").appendChild(crea2);

let crea3 = document.createElement("div");
crea3.textContent= "Moi aussi merci !";
document.getElementById("idBody").appendChild(crea3);

// let crea0 = document.createElement("section");
// crea0.id="idSection";
// crea0.appendChild(document.createTextNode("Ma nouvelle section"));
// document.getElementById("idBody").insertBefore(crea0,crea1);


// les colorer ATTENTION !!! le nth-child(2) est la balise script

document.querySelector(":nth-child(4)").style.color = "orange";
document.querySelector(":nth-child(5)").style.color = "green";
document.querySelector(":nth-child(6)").style.color = "blue";
document.querySelector(":nth-child(4)").style.cssFloat="left" ;
document.querySelector(":nth-child(5)").style.cssFloat="left" ;
document.querySelector(":nth-child(6)").style.cssFloat="left" ;













