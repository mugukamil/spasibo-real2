#!/usr/local/bin/php -q
<?php
date_default_timezone_set("Europe/Moscow");
$hour = date('H');
$interval = 33;

if ($hour >= '9' || $hour < '21') {
  chdir(dirname(__FILE__));

  $value = 40;
  $counter = file_get_contents('counter.txt');
  $file = fopen('counter.txt', 'w');
  fwrite($file, (int) $counter + (int) $value);
}
