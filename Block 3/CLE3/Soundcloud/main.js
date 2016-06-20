function playSomeSound(){
    SC.get('/tracks',{
        bpm:{from:130, to:130}

    }, function(tracks){
        var random = Math.floor(Math.random()* 49);
        SC.oEmbed(tracks[random].uri, {auto_play: true}, document.getElementById('target'));
    });
}

window.onload = function(){
    SC.initialize({
        client_id: 'd74af833ef8e0dcbd2da445320ccc0a3'
    });

    var menuLinks = document.getElementsByClassName('genre');
    for(var i = 0; i < menuLinks.length; i++){
        var menuLink = menuLinks[i];
        menuLink.onclick = function(e){
            e.preventDefault();
            playSomeSound(menuLinks.innerHTML);
        }
    };

}
