
//-----------------fonction avec callback------------------------------
// function faireQqcALAncienne(successCallback, failureCallback) {
//     console.log("C'est fait !");
    
//     if (Math.random() > .5) {
//         successCallback('Réussite');
//     }
//     else {
//         failureCallback('Echec');
//     }
// }

function successCallback(resultat) {
    console.log("L' opération a réussi avec le message : " + resultat);
}

function failureCallback(erreur) {
    console.log("L'opération a échoué avec le message : " + erreur );    
}

// faireQqcALAncienne(successCallback, failureCallback);

//-----fonction qui renvoie une promesse sur laquelle on met les callback-----------------

function faireQqc() {
    return new Promise((resolve, reject) => {
        console.log("C'est fait !!");
        if (Math.random() > .5) {
            resolve('Réussite bis');
        }
        else {
            reject('Echec bis');
        }
    })
}

const promise = faireQqc();
promise.then(successCallback, failureCallback);

//------------------------------------------------------------------------------


faireQqc().then(successCallback, failureCallback);