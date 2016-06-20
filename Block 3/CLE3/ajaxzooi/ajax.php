<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <script src="http://connect.soundcloud.com/sdk.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <title></title>
</head>
<body>
    <li><a href="#" class="genre" id="Hardlopen" onclick="led.php?state=1">Hardlopen</a><a href="led.php?state=1"> 100</a></li>
    <li><a href="led.php?state=2" class="genre" id="Wandelen" onclick="state=2" >Wandelen</a><a href="led.php?state=2"> 150</a></li>
    <li><a href="led.php?state=3" class="genre" id="Joggen">Joggen</a><a href="led.php?state=3"> 200</a></li>
    <li><a href="location.php?location=10">longitude</a></li>

    <form id="idForm" method="post" enctype="multipart/form-data">
        <input type="text" name="first" value="Bob" />
        <input type="text" name="middle" value="James" />
        <input type="text" name="last" value="Smith" />
        <input name="image" type="file" />
        <input type="submit" name="submit" value="Submit" />
    </form>

<!--Location-->
    <p>Click the button to get your coordinates.</p>

    <button onclick="getLocation()">Try It</button>
    <p id="demo"></p>

<!--Soundcloud-->
    <div id="target" height="100px" width="100px"></div>

</body>
<script type="text/javascript" src="main.js"></script>



<script>
    $(function() {
   $("#idForm").submit(function() { alert("hi");

        var url = "ajax.php";
        $.ajax({
            type: "POST",
            url: url,
            data: $("#idForm").serialize(),
            success: function(data) {
                alert(data);
            }
        });
        });
        return false;
    });
</script>


<!---->
<!--    var x = document.getElementById("demo");-->
<!--    function getLocation() {-->
<!--        if (navigator.geolocation) {-->
<!--            navigator.geolocation.getCurrentPosition(showPosition);-->
<!--        } else {-->
<!--            x.innerHTML = "Geolocation is not supported by this browser.";-->
<!--        }-->
<!--    }-->
<!--    function showPosition(position) {-->
<!--        var latitude = position.coords.latitude;-->
<!--        var longitude = position.coords.longitude;-->
<!--        x.innerHTML = "Latitude: " + latitude + "<br> Longitude: " +  longitude;-->
<!---->
<!--//        if (longitude < 51.919652 && > 51.916604){-->
<!--//            waarde = 11-->
<!--//        }-->
<!---->
<!--//        else{-->
<!--//            waarde = 4;-->
<!--//        }-->
<!---->
<!--    }-->



</html>



