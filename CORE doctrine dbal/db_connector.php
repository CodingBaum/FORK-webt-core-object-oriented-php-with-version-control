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

function getPlayerNameById($id) {
    $conn = getQueryBuilder();
    $queryBuilder = $conn->createQueryBuilder();
    $queryBuilder
        ->select('name')
        ->from('player')
        ->where('pk_id = ?')
        ->setParameter(0, $id);

    return $queryBuilder->fetchOne();
}