<?php

namespace CORE2;
include("Song.php");
include("OST.php");

class Seeder {
    private $OSTs = array();

    public function __construct() {
        for ($i = 0; $i < 3; $i++) {
            $currentSongs = array();
            for ($j = 0; $j < 4; $j++) {
                array_push($currentSongs, new Song(uniqueID(), getRandomWord(), getRandomWord(), $j, rand(200, 400)/100));
            }
            array_push($this->OSTs, new OST($i, getRandomWord(), getRandomWord(), rand(2000,2015), $currentSongs));
        }
    }

    public function getOSTs() {
        return $this->OSTs;
    }
}
function uniqueID(){
    $zwerg=rand(1000,9999);
    $arr=[];
    if(in_array($zwerg,$arr,false)){
        uniqueID();
    }
    return $zwerg;
}

function getRandomWord($len = 10) {
    $word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}
