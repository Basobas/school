/**
 * Created by Baso on 14-4-2016.
 */

$.ajax({
    url: "askdjakdj",
    dataType: 'json',
    data: {categorie: 'onderzoeken'},
    succes: ajaxSuccesHandler

})

function assLiElement(step, text){
    var ul = document.getElementsByClassName('recipe');
    var li = document.createElement('li');
    li.setAttribute('class', step)
    li.innerHTML = text;
    ul[0].appendChild(li);
}
































var a = 4;
var b = 5;
var c = 8;

function addNumbers(num1, num2){
    var sum = num1 + num2;
    return sum;
}
addNumbers(a,b);


var spaghetti = {
    name: "henk",
    nee: "harry"

}

$.ajax({
    url:"http://cmgtasdokoaskdoak.nl/asdas",
    dataType:'json',
    data: {categorie:'programmeren'},
    success: ajaxSuccesHandler


}
)
