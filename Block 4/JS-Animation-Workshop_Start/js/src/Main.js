window.addEventListener("load", startApp);


var kartsFinished = 0;
var startButton;


function startApp() {

	// here we define the start button
	TweenLite.set("#start", {y:30});
	TweenLite.set(".kart", {x:50});
	startButton = document.getElementById("start");
	startButton.addEventListener("click", startRace);


}


function startRace(){

	console.log("start");
	TweenLite.to("#mario",Math.random()*10,{x:window.innerWidth});
	TweenLite.to("#luigi",Math.random()*10,{x:window.innerWidth});
	TweenLite.to("#peach",Math.random()*10,{x:window.innerWidth});
	TweenLite.to("#toad",Math.random()*10,{x:window.innerWidth});
}

function checkwinner(kart){
	console.log(kart + "finished!");

}
