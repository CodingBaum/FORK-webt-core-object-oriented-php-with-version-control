<?php

namespace CORE2;
include("Seeder.php");

$temp = new Seeder();
echo var_export($temp->getOSTs());
