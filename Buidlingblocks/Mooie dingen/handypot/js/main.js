window.addEventListener('load', init);

function init()
{

    var button = document.getElementById('knop');
    button.addEventListener('click', addItem);
}


function addItem()
{
    var ul = document.getElementById('namen');

    var li = document.createElement('li');
    li.innerHTML = 'Lorem';

    ul.appendChild(li);
}
