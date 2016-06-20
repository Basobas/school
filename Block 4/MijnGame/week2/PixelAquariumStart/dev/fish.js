var Fish = (function () {
    function Fish() {
        var div = document.createElement("fish");
        document.body.appendChild(div);
        // positie
        var startx = 100;
        var starty = 100;
        // kleur
        var color = 45;
        // set css left en top
        div.style.left = startx + "px";
        div.style.top = starty + "px";
        // color filter with css!
        div.style.webkitFilter = "hue-rotate(" + color + "deg)";
        div.style.filter = "hue-rotate(" + color + "deg)";
    }
    return Fish;
})();
//# sourceMappingURL=fish.js.map