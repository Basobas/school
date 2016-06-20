SC.initialize({
    client_id: 'd74af833ef8e0dcbd2da445320ccc0a3'
});

$(document).ready(function() {
    SC.get('/tracks', { bpm:{from:100, to:101}}, function(tracks)
    {
        console.log(tracks);
        $(tracks).each(function(index, track)
        {
            console.log(track.permalink_url);

        });
    });
});
