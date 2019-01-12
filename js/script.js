let button = document.getElementById('button');
let nav = document.getElementsByTagName('nav')[0];
let svg = button.childNodes[1].firstElementChild.attributes['xlink:href'];
let compteur = 1;


console.log(svg)

button.addEventListener('click', function () {
    nav.classList.toggle('display');
    svg.value = "#close";
    compteur++;
    console.log(compteur)
    if (compteur%2 !== 0) {
        console.log("je suis dans la condition");
        svg.value = "#menu";
    }
})