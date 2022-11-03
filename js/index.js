let e;
let error;

function checkError(element, id)
{
    console.log(element.value)

    if (element.value == '' || element.value == 'Choisissez une option...') {
        document.getElementById(id).classList.remove("cache");
        e.preventDefault();
        error = true;
    }   
    else{
        document.getElementById(id).classList.add("cache");
    }
}

document.querySelector("form").addEventListener("submit", (ev) =>
{
    e = ev;
    error = false;

    checkError(nom, "name");
    checkError(prenom, "lname");
    checkError (mail,"email");
    checkError(filiere,"ffiliere");
    checkError(filiere,"ffiliere");
    checkError(Annee,"aannee");
    checkError(adresse,"aadresse");
    checkError(ville,"vville");
    checkError(region,"rregion")

    console.log(error);

    if (error == false) {
        alert("Donnees Envoyees !");
    }
});