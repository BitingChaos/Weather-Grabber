<?php

// Require the weather function
require_once( 'weather.php' );

// Standard display function
function noaa_weather_grabber_test( $weather ) {
	// Display each item
	if ((isset ( $weather->okay )) && ( $weather->okay == "yes" )) {
		echo "Weather status: " . $weather->okay . "\n";
		echo "Location: " . $weather->location . "\n";
		echo "Weather condition: " . $weather->condition . "\n";
		echo "Temperature: " . $weather->temp . "\n";
		echo "Image code: " . $weather->imgCode . "\n";
		echo "Time updated: " . $weather->feedUpdatedAt . "\n";
		echo "Time cached: " . $weather->feedCachedAt . "\n";
		echo "\n";
	}
	
	// Dump the entire weather variable
	// This is just for testing -- do not include on your website.
	var_dump( $weather );
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Current NOAA Weather Grabber &ndash; Sample</title>
</head>
<body>
<h2>Current NOAA Weather Grabber &ndash; Sample</h2>
<h3>Standard URL</h3>
<pre>
<?php

// Get the weather
$weather = noaa_weather_grabber( 'KMSP', 'yes', NULL );

// Run the weather test function
noaa_weather_grabber_test( $weather );

?>
</pre>
<h3>Point Forecast URL</h3>
<pre>
<?php

// Get the weather
$weather = noaa_weather_grabber( 'KMSP', 'yes', 'http://forecast.weather.gov/MapClick.php?lat=44.8835&lon=-93.2113&unit=0&lg=english&FcstType=dwml' );

// Run the weather test function
noaa_weather_grabber_test( $weather );

?>
</pre>
</body>
</html>