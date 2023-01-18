<?php

interface IVideo {
    public function getName();
    public function getSource();
    public function getHTMLCode();
}

abstract class AVideo implements IVideo {
    private $name;

    public function getName() {
        return $this->name;
    }
    abstract function getSource();
    abstract function getHTMLCode();
}

class YoutubeVideo extends AVideo {
    private $source;
    private $name;

    public  function __construct(string $name, string $source) {
        $this->name = $name;
        $this->source = $source;
    }

    function getSource()
    {
        return $this->source;
    }

    function getHTMLCode()
    {
        return '<iframe src="'.$this->source.'" title="'.$this->name.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    }

    function getName()
    {
        return $this->name;
    }
}

class Vimeo extends AVideo {
    private $source;
    private $name;

    public  function __construct(string $name, string $source) {
        $this->name = $name;
        $this->source = $source;
    }

    function getSource()
    {
        return $this->source;
    }

    function getHTMLCode()
    {
        return '<iframe src="'.$this->source.'" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
    }
    function getName()
    {
        return $this->name;
    }
}