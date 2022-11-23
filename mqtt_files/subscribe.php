<?php
$host   = "riset.revolusi-it.com";
$port     = 1883;
$username = "UTM";
$password = "calonsarjana23";

require("phpMQTT.php");
$message = "Pesan MQTT";
$mqtt = new bluerhinos\phpMQTT($host, $port, "ClientID".rand());

if ($mqtt->connect(true,NULL,$username,$password)) {
  $mqtt->publish("iot/kendali",$message, 0);
  $mqtt->close();
}else{
  echo "Fail or time out
";
}
?>