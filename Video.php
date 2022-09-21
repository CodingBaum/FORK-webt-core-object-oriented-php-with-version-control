<?php

class Video {
    public  function __construct(
        public string $testVariable = 'This is a test du scheißer'
    ) {}

    public function output() {
        echo $this->testVariable;
    }
}

$video = new Video();
$video->output();