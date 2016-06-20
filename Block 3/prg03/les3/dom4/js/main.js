//opdracht
//1. voeg een ‘click event handler’ toe aan een listitem. De inhoud van het list item wordt in de console gezet

window.addEventListener('load', init);

/**
 * Execute after document is fully loaded
 */
function init()
{
    var form = document.getElementById("new-todo-form");
    form.addEventListener("submit", formSubmitHandler);


    var lis = document.getElementsByTagName('li');
    for (var i = 0; i < lis.length; i++){
        lis[i].addEventListener('çlick',liClickHandler);
    }

}

/**
 * Handler for the form submit event
 *
 * @param e
 */
function formSubmitHandler(e)
{
    e.preventDefault(); //leave this one out to see te result
}

/**
 * Handler for clicking on a list item
 *
 * @param e
 */
function liClickHandler(e)
{
    console.log(e.target.innerHTML); //i want to know which li is clicked
}
