<?php
use Doctrine\DBAL\DriverManager;

require_once 'vendor\autoload.php';

function getQueryBuilder() {
    $connectionParams = [
        'dbname' => 'webtDoctrine',
        'user' => 'root',
        'password' => '',
        'host' => 'localhost',
        'driver' => 'pdo_mysql',
        'port' => '3306'
    ];

    $conn = DriverManager::getConnection($connectionParams);
    return $conn;
}

function getAllGames() {
    $conn = getQueryBuilder();
    $queryBuilder = $conn->createQueryBuilder();
    $queryBuilder
        ->select('*')
        ->from('Game');
    return $queryBuilder->fetchAllAssociative();
}

function addGame($player1, $symbol1, $symbol2, $player2) {
    $player1 =  strtoupper($player1);
    $player2 =  strtoupper($player2);
    $conn = getQueryBuilder();
    $queryBuilderPlayer1 = $conn->createQueryBuilder();
    $queryBuilderPlayer1
        ->select('*')
        ->from('player')
        ->where('pk_name = ?')
        ->setParameter(0, $player1);

    if (!$queryBuilderPlayer1->fetchAssociative()) {
        $conn = getQueryBuilder();
        $queryBuilder1 = $conn->createQueryBuilder();
        $queryBuilder1
            ->insert('player')
            ->values([
                'pk_name' => '?'
            ])
            ->setParameter(0, $player1);

        $queryBuilder1->executeStatement();
    }

    $queryBuilderPlayer2 = $conn->createQueryBuilder();
    $queryBuilderPlayer2
        ->select('*')
        ->from('player')
        ->where('pk_name = ?')
        ->setParameter(0, $player2);

    if (!$queryBuilderPlayer2->fetchAssociative()) {
        $conn = getQueryBuilder();
        $queryBuilder1 = $conn->createQueryBuilder();
        $queryBuilder1
            ->insert('player')
            ->values([
                'pk_name' => '?'
            ])
            ->setParameter(0, $player2);
        $queryBuilder1->executeStatement();
    }

    $date = date("Y-m-d H:i:s");

    $conn = getQueryBuilder();
    $queryBuilder = $conn->createQueryBuilder();
    $queryBuilder
        ->insert('Game')
        ->values([
            'fk_pk_player1' => '?',
            'fk_pk_player2' => '?',
            'symbol1' => '?',
            'symbol2' => '?',
            'date' => '?'
        ])
        ->setParameter(0, $player1)
        ->setParameter(1, $player2)
        ->setParameter(2, $symbol1)
        ->setParameter(3, $symbol2)
        ->setParameter(4, $date);

    $queryBuilder->executeStatement();
}