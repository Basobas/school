window.addEventListener('load', init);

function init()
{
    var button = document.getElementById('button');
    button.addEventListener('click', birthday);
}


function birthday() {
    var number = document.getElementById("birthday").value;
    var text;

    if (number === "4") {
        text = "Je hebt het juiste antwoord geraden! Het is 4 Januari";
    }
    else if (number === "5" || number === "3") {
        text = "Je bent heel dichtbij.";
    }
    else {
        text = "Ver van het antwoord af";
    }
    document.getElementById("output").innerHTML = text;
}
