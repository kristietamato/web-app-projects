<?php

	$contents = file_get_contents("http://www.weather-forecast.com/locations/San-Francisco/forecasts/latest");
	
	$code = '3 Day Weather Forecast Summary:<\/b>
			 <span class="phrase">Light rain (total 3mm), mostly falling on Sat morning. 
			 Very mild (max 16&deg;C on Sun afternoon, min 9&deg;C on Sat night). 
			 Wind will be generally light.<\/span>';

	preg_match("/".$code."/i", $contents, $matches);

	print_r($matches);
?>