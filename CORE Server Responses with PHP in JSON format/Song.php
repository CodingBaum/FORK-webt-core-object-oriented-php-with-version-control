<?php

namespace CORE2;

class Song implements \JsonSerializable {
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

    public function jsonSerialize()
    {
        return array(
            "id"=>$this->id,
            "name"=>$this->name,
            "artist"=>$this->artist,
            "tracknumber"=>$this->trackNumber,
            "duration"=>$this->duration
        );
    }
}