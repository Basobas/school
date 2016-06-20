var Bubble = (function () {
    function Bubble() {
        var div = document.createElement("bubble");
        document.body.appendChild(div);
        // positie
        var startx = 100;
        var starty = 100;
        // set css left en top
        div.style.left = startx + "px";
        div.style.top = starty + "px";
    }
    return Bubble;
})();
//# sourceMappingURL=bubble.js.map