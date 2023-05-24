<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'Game')]
class Game
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $pk_id = null;
    #[ORM\Column(length: 50)]
    private $player1;
    #[ORM\Column(length: 10)]
    private $symbol1;
    #[ORM\Column(length: 10)]
    private $symbol2;
    #[ORM\Column(length: 50)]
    private $player2;
    #[ORM\Column(type: Types::DATETIME)]
    private $date;
}