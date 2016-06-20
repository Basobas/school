<?php
$playlist = file_get_contents("tsconfig.json");
$playlist_json = json_decode($playlist);

echo "<pre>";
print_r($playlist_json);
echo "</pre>";


foreach ($playlist_json->album as $albums){

}


?>



