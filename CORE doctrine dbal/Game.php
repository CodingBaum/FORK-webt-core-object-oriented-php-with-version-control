<?php

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'Game')]
class Game
{
    #[Id]
    #[Column(type: 'integer')]
    #[GeneratedValue(strategy: 'IDENTITY')]
    private int|null $pk_id = null;
    #[Column(length: 50)]
    private $player1;
    #[Column(length: 10)]
    private $symbol1;
    #[Column(length: 10)]
    private $symbol2;
    #[Column(length: 50)]
    private $player2;
    #[Column(type: Types::DATETIME)]
    private $date;
}