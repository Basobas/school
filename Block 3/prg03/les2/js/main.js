/**
 * Created by Baso on 15-2-2016.
 */
console.group("assignment 1");
var dish = 'spaghetti';
var dishScore = '2';

console.log(dish,dishScore);

var dishFirstLetter = dish.charAt(0).toUpperCase();
var dishOtherLetters = dish.substr(1);

console.log(dishFirstLetter + dishOtherLetters);

console.groupEnd();

console.group("assignment 2");

var dishScores = [1,2,3,4];
var totalScore = 0;
var dishScoresLength = dishScores.length;
var dishScoresiets = ['', 'oke', 'bleh', 'oke','nee']

for(var i=0; i < dishScoresLength; i++)
{
    console.log(dishScoresiets[dishScores[i]]);

    totalScore += dishScores[i];
}

console.log(totalScore / dishScoresLength);

console.groupEnd();

console.group("assignment 3");

var spaghetti = {
    name: "nee",
    dishScores: [1,2,3,4],

};

console.groupEnd();
