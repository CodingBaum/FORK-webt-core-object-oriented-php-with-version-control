<?php
namespace CORE2;

header('Content-Type: application/json; charset=utf-8');
require_once "Seeder.php";

if (isset($_GET["id"])) {
    if ($_GET["id"] == "any") {
        echo json_encode((new Seeder)->getOSTs());
    }
    $request_OST =  $_GET["id"];
    $OSTs = (new Seeder)->getOSTs();
    foreach ($OSTs as &$value) {
        if ($value->getID() == $request_OST) {
            echo json_encode($value, $depth = 512);
        }
    }
} else {
    echo json_encode(null);
}