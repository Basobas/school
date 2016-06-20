
var Paddle = (function () {
    function Paddle(up, down, x, y) {
        this.downSpeed = 0;
        this.upSpeed = 0;
        this.div = document.createElement("paddle");
        document.body.appendChild(this.div);
        this.upkey = up;
        this.downkey = down;
        this.p1PosX = x;
        this.p1PosY = y;


        this.move();
        window.addEventListener("keydown", this.onKeyDown.bind(this));
        window.addEventListener("keyup", this.onKeyUp.bind(this));
    }
    Paddle.prototype.getX = function () {
        return this.p1PosX;

    };
    Paddle.prototype.getY = function () {
        return this.p1PosY;
    };

    Paddle.prototype.onKeyDown = function (event) {
        switch (event.keyCode) {
            case this.upkey:
                this.upSpeed = 5;
                break;
            case this.downkey:
                this.downSpeed = 5;
                break;
        }
    };
    Paddle.prototype.onKeyUp = function (event) {
        switch (event.keyCode) {
            case this.upkey:
                this.upSpeed = 0;
                break;
            case this.downkey:
                this.downSpeed = 0;
                break;
        }
    };

    Paddle.prototype.move = function () {
        this.p1PosY = this.p1PosY - this.upSpeed + this.downSpeed;
        this.div.style.transform = "translate(" + this.p1PosX + "px, " + this.p1PosY + "px) scaleX(-1)";
    };
    return Paddle;
}());

var Ball = (function () {
    function Ball() {
        this.div = document.createElement("ball");
        document.body.appendChild(this.div);
        this.posX = 600;
        this.posY = 270;
        this.speedX = -4;
        this.speedY = 0;
        this.move();
    }
    Ball.prototype.checkPaddle = function (pad) {
        if (this.posX + 40 >= pad.getX() && this.posX <= pad.getX() + 25 && this.posX && this.posY + 40 >= pad.getY() && this.posY <= pad.getY() + 100) {
            this.speedX *= -1;
            console.log("De bal raakt de paddle!");
        }
    };
    Ball.prototype.move = function () {
        this.posX += this.speedX;
        this.posY += this.speedY;
        this.div.style.transform = "translate(" + this.posX + "px, " + this.posY + "px)";
        if (this.posX > window.innerWidth || this.posX < -40) {
            this.div.remove();
        }
        if (this.posY + 40 > window.innerHeight || this.posY < 0) {
            this.speedY *= -1;
        }
    };
    return Ball;
}());

var Game = (function () {
    function Game() {
        this.paddle = new Paddle(87, 83, 10, 270);
        this.paddle2 = new Paddle(38, 40, 1280, 270);
        this.ball = new Ball();

        requestAnimationFrame(this.gameLoop.bind(this));
    }
    Game.prototype.gameLoop = function () {
        this.paddle.move();
        this.paddle2.move();
        this.ball.checkPaddle(this.paddle);
        this.ball.move();
        requestAnimationFrame(this.gameLoop.bind(this));
    };
    return Game;
}());


window.addEventListener("load", function () {
    new Game();
});
