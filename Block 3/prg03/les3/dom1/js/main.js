var receipts = document.getElementsByTagName('li');
var total = 0.0;


// test of je de tags hebt gevonden
console.log(receipts); 

// loop nu door de bonnetjes heen
for (var i = 0; i < receipts.length; i++) {
	var totalString = receipts[i].innerHTML;
	total += parseFloat(totalString);

	// test
	console.log("totaal is nu " + total);

	// hint: je kan 'toFixed' gebruiken om het getal mooi af te ronden
	console.log("afgerond getal is " + total.toFixed(2));
}

//
// OPDRACHT 1: TOON HET TOTAAL IN DE DIV MET HET ID "total"
//
function setTotalPriceInHTML(total){
var totalPlaceholder = get.getElementById("total")
totalPlaceholder.innerHTML = total.innerfixed
}

//
// OPDRACHT 2: PLAATS ALLE BOVENSTAANDE CODE IN FUNCTIES
//
