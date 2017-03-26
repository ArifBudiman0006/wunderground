<?php
  $json_stringastronomy = file_get_contents("http://api.wunderground.com/api/76f2ddc577361500/astronomy/q/Australia/Brisbane.json");
  $parsed_jsonastronomy = json_decode($json_stringastronomy);
  $hour= $parsed_jsonastronomy->{'sun_phase'}->{'sunrise'}->{'hour'};
  $minute = $parsed_jsonastronomy->{'sun_phase'}->{'sunrise'}->{'minute'}; 
  echo "SUN PHASE<br>";
  echo "Sunrise";
  echo "Hour: ${hour}<br>";
  echo "Minute: ${minute}<br><br>";
  
  $json_stringforecast	= file_get_contents("http://api.wunderground.com/api/76f2ddc577361500/forecast/q/Australia/Brisbane.json");
  $parsed_jsonforecast = json_decode($json_stringforecast);
  $waktu = $parsed_jsonforecast->{'forecast'}->{'txt_forecast'}->{'date'};
  $hari = $parsed_jsonforecast->{'forecast'}->{'txt_forecast'}->forecastday[3]->{'title'};
  $ramalan = $parsed_jsonforecast->{'forecast'}->{'txt_forecast'}->forecastday[3]->{'fcttext'};
  
  echo "FORECAST<br>";
  echo "Time: ${waktu}<br>";
  echo "Day: ${hari}<br>";
  echo "Forecast ${hari}: ${ramalan}<br><br>";
  
  
  $json_stringrawtide	= file_get_contents("http://api.wunderground.com/api/76f2ddc577361500/rawtide/q/CA/San_Francisco.json");
  $parsed_jsonrawtide = json_decode($json_stringrawtide);
  $tideside = $parsed_jsonrawtide->{'rawtide'}->tideInfo[0]->{'tideSite'};
  $lat = $parsed_jsonrawtide->{'rawtide'}->tideInfo[0]->{'lat'};
  $lon = $parsed_jsonrawtide->{'rawtide'}->tideInfo[0]->{'lon'};
  $unit = $parsed_jsonrawtide->{'rawtide'}->tideInfo[0]->{'units'};
  $type = $parsed_jsonrawtide->{'rawtide'}->tideInfo[0]->{'type'};

  

  echo "TIDESIDE: ${tideside}<br>";
  echo "lat: ${lat}<br>";
  echo "lon: ${lon}<br>";
  echo "unit: ${unit}<br>";
  echo "type: ${type}<br><br>";
  
  
  
  
?>