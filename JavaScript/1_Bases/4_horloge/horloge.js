



function setDate() {
    let now = new Date();

    console.log(now);

    let heures = now.getHours();

    let minutes = now.getMinutes();

    let secondes = now.getSeconds();

    console.log(heures);
    console.log(minutes);
    console.log(secondes);

    let degSec = ((secondes/60)*360);
    let degMin = ((minutes/60)*360);
    let degHeure = ((heures/12)*360)+((minutes/60)*30); 

    let divSeconde = document.querySelector(".seconde");
    let divMinute = document.querySelector(".minute");
    let divHeure = document.querySelector(".heure");

    divSeconde.style.transform = "rotate("+ degSec + "deg)";
    divMinute.style.transform = "rotate("+ degMin + "deg)";

    //ou en utilisant les backstix 
    divHeure.style.transform = `rotate(${degHeure}deg)`;

}

setInterval(setDate,1000);

