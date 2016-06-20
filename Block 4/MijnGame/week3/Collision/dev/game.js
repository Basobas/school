/// <reference path="ball.ts"/>
var Game = (function () {
    function Game() {
        this.paddle = new Paddle();
        this.ball = new Ball();
        // utils
        this.utils = new Utils();
        // start game loop        
        requestAnimationFrame(this.gameLoop.bind(this));
    }
    // game loop
    Game.prototype.gameLoop = function () {
        // hier checken of de ball een paddle raakt
        var hit = this.utils.objectsCollide(this.ball, this.paddle);
        if (hit) {
            document.getElementsByTagName("ui")[0].innerHTML = "BALL HITS PADDLE!";
            this.ball.hitPaddle();
        }
        // ball en paddle updaten
        this.ball.update();
        this.paddle.update();
        requestAnimationFrame(this.gameLoop.bind(this));
    };
    return Game;
})();
//# sourceMappingURL=game.js.map