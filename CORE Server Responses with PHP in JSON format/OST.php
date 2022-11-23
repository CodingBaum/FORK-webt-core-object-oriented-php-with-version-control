<?php

namespace CORE2;

class OST {
    private $id;
    private $name;
    private $videoGameName;
    private $releaseYear;
    private $trackList;

    public  function __construct(int $id, string $name, string $videoGameName, int $releaseYear, array $trackList) {
        $this->id = $id;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }
}