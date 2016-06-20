/**
 * Utils
 */
var Utils = (function () {
    function Utils() {
    }
    //
    // kijk of twee objecten elkaar raken
    // dit moeten objecten zijn die een public x, y, width en height hebben
    // met overerving kunnen we gaan zorgen dat je hier ook andere objecten behalve ball en paddle aan kan geven
    //
    Utils.prototype.objectsCollide = function (c1, c2) {
        return (c1.x < c2.x + c2.width && c1.x + c1.width > c2.x && c1.y < c2.y + c2.height && c1.height + c1.y > c2.y);
    };
    return Utils;
})();
//# sourceMappingURL=utils.js.map