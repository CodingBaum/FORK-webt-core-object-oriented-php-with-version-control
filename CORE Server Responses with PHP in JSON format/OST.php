<?php

namespace CORE2;

class OST implements \JsonSerializable {
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

    public function getID() {
        return $this->id;
    }

    public function jsonSerialize()
    {
        return array(
            "id"=>$this->id,
            "name"=>$this->name,
            "videoGameName"=>$this->videoGameName,
            "releaseYear"=>$this->releaseYear,
            "tracklist"=>$this->trackList
        );
    }
}