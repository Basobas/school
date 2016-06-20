//
// OPDRACHT
//
// 1
// VOEG VIA JAVASCRIPT EEN VIS EN EEN BUBBLE TOE
// ZET DE VIS OP EEN WILLEKEURIGE PLEK IN HET SCHERM MET EEN WILLEKEURIGE KLEUR
// ZET DE BUBBLE OP EEN WILLEKEURIGE X POSITIE

// 2
// MAAK EEN FOR LOOP DIE 50 VISJES EN BUBBLES TOEVOEGT. DEZE MOETEN ALLEMAAL ANDERS ZIJN!

// 3
// GEBRUIK NU SETTIMOUT OF SETINTERVAL OM NIEUWE VISJES EN BUBBLES TE PLAATSEN

// 4
// PLAATS EEN TITEL EN START KNOP. ALS JE OP START KLIKT VERDWIJNEN DE TITEL EN KNOP, EN 
// DAARNA WORDEN PAS DE VISJES GETEKEND

// 5 
// HANG EEN CLICK EVENT LISTENER AAN ELK VISJE. ALS GEKLIKT WORDT
// GEEF JE DE GEKLIKTE VIS EEN NIEUWE CLASS DIE EEN ANDERE ACHTERGROND HEEFT 
// fish.classList.add(".deadfish");




function createFish(){


    var fish = document.createElement("fish");
        var randomnumber = Math.floor(Math.random()*90);
        var randomnumber1 = Math.floor(Math.random()*90);

        fish.style.left = randomnumber + '%';
        fish.style.top = randomnumber1 + '%';

        // create random number between 0 and 360 deg
        var degRandomnumber = Math.floor(Math.random() * (360 - 1) + 1);
        var degRandonumber2 = Math.floor(Math.random() * (360 - 1) + 1);

        // demo code : verander kleur
        fish.style.webkitFilter = "hue-rotate(" + degRandomnumber + "deg)";
        fish.style.filter = "hue-rotate(" + degRandonumber2 + "deg)";

        document.body.appendChild(fish);

}

function createBubble() {

        var bubble = document.createElement("bubble");
        var randomnumber = Math.floor(Math.random() * 90);
        var randomnumber1 = Math.floor(Math.random() * 90);

        bubble.style.left = randomnumber + '%';
        bubble.style.top = randomnumber1 + '%';
        document.body.appendChild(bubble);

}



function createBubFish(){
var timesRun = 0;
var interval = setInterval(function(){
    timesRun += 1;
    if(timesRun ===  10){
        clearInterval(interval);
    }
    createFish();
    createBubble();
}, 1000);
}



function startGame(){
    var start = document.getElementsByTagName("start")[0];

    start.addEventListener('click', createBubFish);


}


//
// start the game on window load
//

window.addEventListener("load", function () {
    startGame();

});
