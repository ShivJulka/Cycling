<?php
// get the GPX data from the POST request
$gpxData = $_POST['gpxData'];

// create a new file and write the GPX data to it
$filename = "gpx_" . time() . ".gpx";
$file = fopen($filename, "w");
fwrite($file, $gpxData);
fclose($file);

// return a response to the client
echo "GPX data saved to $filename";
?>

