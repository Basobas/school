/// <reference path="paddle.ts"/>
var Ball = (function () {
    function Ball() {
        // creeer een div element
        this.div = document.createElement("ball");
        document.body.appendChild(this.div);
        // positie
        this.x = 230;
        this.y = 210;
        this.width = 40;
        this.height = 40;
        this.speedX = -3;
        this.speedY = 0;
    }
    // we hit a paddle
    Ball.prototype.hitPaddle = function () {
        this.speedX *= -1;
    };
    // positie aanpassen, check of we de muur raken
    Ball.prototype.update = function () {
        this.x += this.speedX;
        this.y += this.speedY;
        // bal uit de game halen als de bal uit het scherm gaat
        if (this.x > window.innerWidth || this.x < -40) {
            document.getElementsByTagName("ui")[0].innerHTML = "Resetting ball";
            this.x = 230;
            this.y = 210;
            this.speedX = -3;
        }
        if (this.y + 40 > window.innerHeight || this.y < 0) {
            this.speedY *= -1;
        }
        this.draw();
    };
    // tekenen
    Ball.prototype.draw = function () {
        this.div.style.transform = "translate(" + this.x + "px, " + this.y + "px)";
    };
    return Ball;
})();
//# sourceMappingURL=ball.js.map