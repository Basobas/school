/// <reference path="ball.ts"/>
var Game = (function () {
    // geef hier de ball instance een naam
    // ...
    function Game() {
        // maak hier een ball instance
        // ...
        // start de game loop        
        requestAnimationFrame(this.gameLoop.bind(this));
    }
    Game.prototype.gameLoop = function () {
        // roep hier de move functie van de bal aan
        ///
        // hiermee wordt de gameloop opnieuw aangeroepen
        requestAnimationFrame(this.gameLoop.bind(this));
    };
    return Game;
})();
//# sourceMappingURL=game.js.map