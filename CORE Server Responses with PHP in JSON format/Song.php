<?php

namespace CORE2;

class Song {
    private $id;
    private $name;
    private $artist;
    private $trackNumber;
    private $duration;

    public  function __construct(int $id, string $name, string $artist, int $trackNumber, float $duration) {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
    }
}