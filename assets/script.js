/*window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("header").style.color = "blue";
    } else {
        document.getElementById("header").style.height = "3em";
    }
}*/

async function getLine(value){
    const fileLines = await fetch('https://gist.githubusercontent.com/nass-h/e446634caeda4d36c2cbdea9ce1be333/raw/5bd3e2a6b9746ed63dd8769270f269450034f777/lignes.json');
    const dataLines = await fileLines.json();
    //clearLines();
    if(value=="All") { // si on souhaite afficher tous les pays
        dataLines.forEach(ligne =>{
            showLine(ligne);
        });
    }
    else{ // si on souhaite filtrer par région
        dataLines.forEach(ligne =>{
            if(value==ligne.categorie){
                showLine(ligne);
            }
        });
    }
}

function showLine(ligne){ /* affiche la ligne */
    let line = document.createElement("li"); // crée un élément <li> au sein de la page
    
    line.setAttribute("class", "item-ligne"); // applique le style CSS
    line.setAttribute("id", ligne.num_interne); // applique l'identifiant de la ligne = son code interne
    line.style.backgroundColor = ligne.couleurBG;
    line.style.color = ligne.couleur;

    if(ligne.nom_com=="RhéVag'"){
        line.innerHTML = '<p class="num-ligne"><span class="material-symbols-outlined">directions_boat</span></p>';
    }else if(ligne.nom_com=="Aéroport"){
        line.innerHTML = '<p class="num-ligne"><span class="material-symbols-outlined">flight</span></p>';
    }else{
        line.innerHTML = '<p class="num-ligne">'+ligne.nom_com+'</p>';
    }
    document.getElementById("list-lignes-"+ligne.categorie).appendChild(line); // enfant rattaché à l'élément parent <ul> de la page
}

function clearLines(categorie){ /* efface toutes les lignes */
    document.getElementById("list-lignes-"+categorie).textContent = ''; // vide la balise <ul> de la page
}