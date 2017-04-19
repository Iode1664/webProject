<?php


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=bdde;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
$resultat = $bdd->query('SELECT lieu FROM activites WHERE id = 1');

$resultats = $resultat->fetch();
$place = $resultats['lieu'];

if($place != null){
$lati=null;
$longi=null;
$address = $place;
$address = urlencode($address);//properly encode the url
$resultat->closeCursor();
// google map geocode api url
$url = "http://maps.google.com/maps/api/geocode/json?address={$address}";//we are getting the response in json

// get the json response
$resp_json = file_get_contents($url);

// decode the json
$resp = json_decode($resp_json, true);

//the  response status would  be 'OK', if are able to geocode the given address
if($resp['status']=='OK'){

// get the longtitude and latitude data
$lat = $resp['results'][0]['geometry']['location']['lat'];
$long = $resp['results'][0]['geometry']['location']['lng'];
?>
<div id=map style="width:100%;height:500px">

</div>
<script  async defer
         src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBFH_b97Fol2fdBVWAWmSFbevmm5CMu1tg&callback=drawMap"></script>
<script>
    function drawMap() {
        var pos = {lat:<?php echo $lat ?> , lng:<?php echo $long ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: pos
        });
        var marker = new google.maps.Marker({
            position: pos,
            map: map
        });
    }

</script>
<?php
}
}
else{
    echo "DID NOT RECEIVE LATITUDE AND LONGITUDE DATA";
}
?>