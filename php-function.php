<?php

######################################################################################################################################################

// convert to datetime format from encoded time string
echo date('d-M-Y h:i:A', 1589972726);

######################################################################################################################################################

// convert UTC time to target time.
function convertUtcToTimeZone($utcDateTime, $targetTimeZone)
{
  $date = new DateTime($utcDateTime, new DateTimeZone('UTC'));
  $date->setTimezone(new DateTimeZone($targetTimeZone));
  return $date->format('Y-m-d H:i:s');
}

echo convertUtcToTimeZone('2024-02-27 10:00:00', 'America/New_York');

######################################################################################################################################################

