/**
 * Paddle
 */
var Paddle = (function () {
    function Paddle() {
        // maak een divje waar de paddle in komt te staan
        this.div = document.createElement("paddle");
        document.body.appendChild(this.div);
        // positie
        this.x = 0;
        this.y = 200;
        this.width = 25;
        this.height = 100;
    }
    Paddle.prototype.update = function () {
        // hier de toetsen uitlezen - in deze demo uitgezet omdat dit alleen over collision detection gaat
        this.draw();
    };
    // tekenen
    Paddle.prototype.draw = function () {
        this.div.style.transform = "translate(" + this.x + "px, " + this.y + "px)";
    };
    return Paddle;
})();
//# sourceMappingURL=paddle.js.map