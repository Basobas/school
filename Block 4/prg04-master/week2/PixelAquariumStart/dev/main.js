/// <reference path="fish.ts"/>
/// <reference path="bubble.ts"/>
var Game = (function () {
    function Game() {
        this.createFish();
        this.createBubble();
    }
    Game.prototype.createFish = function () {
        var f = new Fish();
    };
    Game.prototype.createBubble = function () {
        var b = new Bubble();
    };
    return Game;
})();
// load
window.addEventListener("load", function () {
    new Game();
});
//# sourceMappingURL=main.js.map