<?php

require("Hotel.php");

$hotels = array();

array_push($hotels, new Hotel("Venetian Resort Hotel", "Dieses prachtvolle Casino-Resort im italienischen Stil ist Teil eines Gebäudekomplexes, zu dem The Palazzo und das Kongresszentrum Sands Expo gehören. Es befindet sich am Las Vegas Strip und ist 3 Meilen vom internationalen Flughafen Las Vegas (Harry Reid) entfernt."));
array_push($hotels, new Hotel("Caesars Palace", "Dieses berühmte Casino-Hotel befindet sich in einem weitläufigen Gebäudekomplex im römischen Stil am lebhaften Las Vegas Strip. Es ist 1 Meile (1,6 km) von der Interstate 15 und 14 Meilen (22,5 km) vom Rio Secco Golf Club entfernt."));
array_push($hotels, new Hotel("MGM Grand Hotel", "Das gewaltige, smaragdfarbene Casino-Resort befindet sich am südlichen Ende des Vegas Strip gegenüber dem Tropicana. Der knapp 14 Meter hohe bronzene Löwe ist das Markenzeichen des Hotels und steht vor den Toren Wache."));
array_push($hotels, new Hotel("The Mirage", "Dieses legendäre Casino-Hotel mit Blick auf den berühmten 'ausbrechenden Vulkan' befindet sich am Las Vegas Strip neben dem Hotel Caesars Palace und gegenüber von Madame Tussauds Las Vegas."));

print(implode('
', $hotels));

$filename = "./view.html";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

$contents = str_replace("###HOTELNAME###", $hotels[0]->getName(), $contents);
$contents = str_replace("###HOTELDESCRIPTION###", $hotels[0]->getDescription(), $contents);

$filename = "./index.html";
$handle = fopen($filename, "w");
$contents = fwrite($handle, $contents);
fclose($handle);

print($contents);