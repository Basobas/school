<?php
require_once('includes/settings.php');
require_once('includes/classes/Flickr.php');

$flickr = new Flickr(FLICKR_KEY, FLICKR_SECRET);
$data = $flickr->search('sun');
$photoUrl="https://farm2.staticflickr.com/1494/24545297749_68c13932de.jpg";

echo"<pre>";
print_r($data);
echo"</pre>";

foreach ($data['photos']['photo'] as $image){
    echo '<img src= https://farm{farm-id}.staticflickr.com/{server-id}/{id}_{secret}.jpg'
}

?>

<img src=<?php echo$photoUrl?>>
