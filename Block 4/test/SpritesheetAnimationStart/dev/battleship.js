/**
 * Battleship
 */
var Battleship = (function () {
    function Battleship() {
        var _this = this;
        this.directionX = 0;
        this.directionY = 0;
        this.x = 0;
        this.y = 0;
        this.speed = 0;
        this.createCanvasElement();
        this.directionX = 0;
        this.directionY = 0;
        this.speed = 3;
        window.addEventListener("keydown", function (e) { return _this.onKeyDown(e); });
        window.addEventListener("keyup", function (e) { return _this.onKeyUp(e); });
    }
    Battleship.prototype.createCanvasElement = function () {
        var canvas = document.getElementsByTagName("canvas")[0];
        this.context = canvas.getContext('2d');
        this.image = new Image(); // Create new img element
        this.image.src = 'images/battleship.png'; // Set source path
    };
    // keyboard input zorgt dat de snelheid wordt aangepast
    Battleship.prototype.onKeyDown = function (event) {
        switch (event.keyCode) {
            case 38:
                this.directionY = -1;
                break;
            case 39:
                this.directionX = 1;
                break;
            case 40:
                this.directionY = 1;
                break;
            case 37:
                this.directionX = -1;
                break;
        }
    };
    // speed op 0 alleen als de eigen keys zijn losgelaten
    Battleship.prototype.onKeyUp = function (event) {
        switch (event.keyCode) {
            case 38:
                this.directionY = 0;
                break;
            case 39:
                this.directionX = 0;
                break;
            case 40:
                this.directionY = 0;
                break;
            case 37:
                this.directionX = 0;
                break;
        }
    };
    Battleship.prototype.move = function () {
        this.x = this.x + this.speed * this.directionX;
        this.y = this.y + this.speed * this.directionY;
    };
    Battleship.prototype.draw = function () {
        this.context.drawImage(this.image, this.x, this.y, 400, 308); // x, y, width, height
        /**
         * img	Source image object	Sprite sheet
            sx	Source x	Frame index times frame width
            sy	Source y	0
            sw	Source width	Frame width
            sh	Source height	Frame height
            dx	Destination x	0
            dy	Destination y	0
            dw	Destination width	Frame width
            dh	Destination height	Frame height
         */
    };
    return Battleship;
})();
//# sourceMappingURL=battleship.js.map