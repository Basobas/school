window.addEventListener('load', init);

function init(){
    //button and addevent
    var button = document.getElementById('button');
    button.addEventListener('click', addItem);
}


//event handler

function addItem(){
    //retrieve the whole list
    var ul = document.getElementById('todo');
    //create a new list item
    var li = document.createElement('li');
    li.innerHTML = 'Watch the new X-Files';

    //append new item to the list
    ul.appendChild(li);

}



// 1 MAAK EEN FUNCTIE addItem
// deze wordt aangeroepen door de button in de html

// 2 De functie moet een li item toevoegen aan de bestaande UL
