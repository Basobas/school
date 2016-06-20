

window.addEventListener('load', init);

    function init(){
        console.log('jippie');
        createHTMLElement('h1', 'hallo hoe gaat het');
        getPersonData();

    }



    function createHTMLElement(element, content){
        //1. waar komt het nieuwe element te staan.
        var placeholder = document.getElementById('body');
        //2. wat moet daar komen te staan.
        var newElement = document.createElement(element);
        newElement.innerHTML = content;
        //3. voeg het toe aan het DOM
        placeholder.appendChild(newElement);
    }

    function getPersonData(){
        $.ajax({
            dataType: "json",
            url: 'data.json',
            success: personDataHandler
        });


    }

function  personDataHandler(data){
    console.log(data.persons[0].name);
    createHTMLElement('h1', data.persons[1].name)

}



