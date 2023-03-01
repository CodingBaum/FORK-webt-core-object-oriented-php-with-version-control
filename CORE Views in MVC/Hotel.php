<?php

class Hotel
{
    private string $name;
    private string $description;

    public  function __construct(string $name, string $description) {
        $this->name = $name;
        $this->description = $description;
    }

    function getName(): string
    {
        return $this->name;
    }

    function getDescription(): string
    {
        return $this->description;
    }

    public function __toString(): string
    {
        return $this->name."\n".$this->description;
    }
}