/// <reference path="battleship.ts" />
var Game = (function () {
    function Game() {
        var _this = this;
        // dddd
        this.canvas = document.getElementsByTagName("canvas")[0];
        this.context = this.canvas.getContext('2d');
        this.battleship = new Battleship();
        requestAnimationFrame(function () { return _this.update(); });
    }
    Game.prototype.update = function () {
        this.battleship.move();
        this.draw();
    };
    Game.prototype.draw = function () {
        var _this = this;
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
        this.battleship.draw();
        requestAnimationFrame(function () { return _this.update(); });
    };
    return Game;
})();
//# sourceMappingURL=game.js.map