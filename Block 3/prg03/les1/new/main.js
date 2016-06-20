/**
 * Created by Baso on 14-3-2016.
 */
window.addEventListener('load', init);

function init()
{
    getRecipes();
    var dishGallery = document.getElementById()
}

function getRecipes()
{
    ajaxRequest(showRecipes);
}
/**
 * Generic AJAX handler (to prevent $.ajax everywhere
 *
 * @param ajaxSuccesHandler
 * @param data
 */
function ajaxRequest(ajaxSuccesHandler, data)
{
    var parameters = {
        dataType: 'json',
        url: 'http://localhost:63342/school/blok3/prg03/les1/opdracht1-uitwerking/ajax.php'
    };

    if(data) {
        parameters.data = data;
    }
        $.ajax(parameters).done();
}

function showRecipes(data)
{
    for (var i = 0; i <data.dishes.length; i++){
        var div = createDomElement({tagName:'div',
            attributes:{
                class:'dish'
            }
        });
        var title = createDomElement({
            tagName:'h2',
            attributes:{
                class:'title'
            },
            content: data.dishes[i].name
        });

        div.appendChild(title);
        var image = createDomElement({
            tagName:'img',attributes:{
                src: data.dishes[i].images[0]
            }
        });
        div.appendChild(image);

        var dishGallery = document.getElementById('dish-gallery')
        dishGallery.appendChild(div);
    }
}

/**
 * Generic function to create new DOM elements
 *
 * @param properties
 * @returns {Element}
 */

function createDomElement(properties)
{
    var domElement = document.createElement(properties.tagName);
    var attributes = properties.attributes;

    for (var prop in attributes) {
        domElement.setAttribute(prop, attributes[prop]);
    }

    return domElement
}

function showRecipeDetails()
{

}
