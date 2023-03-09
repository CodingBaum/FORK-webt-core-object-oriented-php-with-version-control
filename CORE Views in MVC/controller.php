<?php

require("Hotel.php");

$hotels = array();

array_push($hotels, new Hotel("Venetian Resort Hotel", "Dieses prachtvolle Casino-Resort im italienischen Stil ist Teil eines Gebäudekomplexes, zu dem The Palazzo und das Kongresszentrum Sands Expo gehören. Es befindet sich am Las Vegas Strip und ist 3 Meilen vom internationalen Flughafen Las Vegas (Harry Reid) entfernt."));
array_push($hotels, new Hotel("Caesars Palace", "Dieses berühmte Casino-Hotel befindet sich in einem weitläufigen Gebäudekomplex im römischen Stil am lebhaften Las Vegas Strip. Es ist 1 Meile (1,6 km) von der Interstate 15 und 14 Meilen (22,5 km) vom Rio Secco Golf Club entfernt."));
array_push($hotels, new Hotel("MGM Grand Hotel", "Das gewaltige, smaragdfarbene Casino-Resort befindet sich am südlichen Ende des Vegas Strip gegenüber dem Tropicana. Der knapp 14 Meter hohe bronzene Löwe ist das Markenzeichen des Hotels und steht vor den Toren Wache."));
array_push($hotels, new Hotel("The Mirage", "Dieses legendäre Casino-Hotel mit Blick auf den berühmten 'ausbrechenden Vulkan' befindet sich am Las Vegas Strip neben dem Hotel Caesars Palace und gegenüber von Madame Tussauds Las Vegas."));
array_push($hotels, new Hotel("The Cosmopolitan", "Dieses schicke Casino-Hotel mit Blick auf die Springbrunnen im angrenzenden Hotel Bellagio befindet sich am Las Vegas Strip auf der gegenüberliegenden Seite vom Planet Hollywood Resort and Casino. Es ist 2 Meilen (3,2 km) vom Flughafen McCarran International entfernt."));
array_push($hotels, new Hotel("Wynn Las Vegas", "Das in einem Hochhaus mit einer charakteristisch gewölbten Fassade untergebrachte Luxus-Casino-Hotel liegt 1 Meile vom Las Vegas Convention Center entfernt."));
array_push($hotels, new Hotel("Luxor", "Dieses farbenfrohe Casino-Resort im ägyptischen Stil liegt am südlichen Ende des Las Vegas Strip in einer 30-stöckigen Pyramide, auf deren Spitze sich ein 315.000-Watt-Scheinwerfer befindet. Zum internationalen Flughafen Las Vegas (Harry Reid) sind es 2 Meilen (3,2 km)."));
array_push($hotels, new Hotel("Bellagio", "Dieses luxuriöse Casino-Resort am Las Vegas Strip bietet Blick auf einen 3 Hektar großen See mit tanzenden Springbrunnen. Es ist 2 Meilen (3,2 km) vom Flughafen Harry Reid International entfernt."));
array_push($hotels, new Hotel("New York-New York Hotel & Casino", "Dieses lebhafte Casino-Hotel im Stil des Big Apple liegt zwischen dem Monte Carlo Resort und dem Excalibur Hotel am Las Vegas Strip. Es befindet sich in mehreren Hochhäusern, die der Skyline von New York nachempfunden sind."));


$filename = "./view.html";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

$filename = "./templates/HotelView.html";
$handle = fopen($filename, "r");
$hotelTemplate = fread($handle, filesize($filename));
fclose($handle);

$loopContent = "";

foreach ($hotels as $value) {
    $content = str_replace("###HOTELNAME###", $value->getName(), $hotelTemplate);
    $content = str_replace("###HOTELDESCRIPTION###", $value->getDescription(), $content);
    $loopContent = $loopContent . "<div class=\"col-md-4 col-sm-12 gx-md-5 gy-md-5\">" . $content ."</div>";
}

$contents = str_replace("###HOTELNAME###", $hotels[0]->getName(), $contents);
$contents = str_replace("###HOTELDESCRIPTION###", $hotels[0]->getDescription(), $contents);

$contents = str_replace("###LOOP###", $loopContent, $contents);

$filename = "./index.html";
$handle = fopen($filename, "w");
$contents = fwrite($handle, $contents);
fclose($handle);

print($contents);