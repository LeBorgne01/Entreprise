var french = [
    "Manager des données et des serveurs",
    "Dorian travaille sur notre serveur, et il gère toutes les données que l'on possède",
    "Front-end développeur",
    "Mael travaille sur tous les sites web que nous faisons, pour faire la partie graphique de ces sites",
    "Back-end développeur",
    "Mickaël travaille sur tous les sites web que nous faisons, il s'occupe des fonctionnalités de ces sites"
];

var english = [
    "Server and data manager",
    "Dorian works on the server, and manage all the datas we have",
    "Front-end developper",
    "Mael works on every website to do the front part of there website",
    "Back-end developper",
    "Mickaël's works is to develop the function of every website"
];

window.onload = function(){
    var btn_french = document.getElementById("btn_french");
    var btn_english = document.getElementById("btn_english");

    btn_french.addEventListener("click",function (event) {
        event.preventDefault();
        getFrench();
    });


    btn_english.addEventListener("click",function (event) {
        event.preventDefault();
        getEnglish();
    });
}

function getEnglish(){
    var article = document.getElementById("content");
    var articleChild = article.children;

    var count = 0;
    for(section of articleChild){
        var objects = section.children;
        objects[1].innerHTML = english[0+count];
        objects[2].innerHTML = english[1+count];
        count += 2;
    }
}

function getFrench(){
    var article = document.getElementById("content");
    var articleChild = article.children;

    var count = 0;
    for(section of articleChild){
        var objects = section.children;
        objects[1].innerHTML = french[0+count];
        objects[2].innerHTML = french[1+count];
        count += 2;
    }
}