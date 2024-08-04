

document.addEventListener("DOMContentLoaded", function() {
    // Récupérer l'élément span
    var avoidSpan = document.getElementById("avoidSpan");

    // Obtenir la couleur du texte dans la span
    var avoidText = avoidSpan.innerHTML.trim().replace(/ /g,'');


    // Ajouter la classe en fonction de la couleur
    avoidSpan.classList.add(avoidText);

    // Afficher la classe ajoutée
    console.log("Class added:", avoidSpan.classList);
});