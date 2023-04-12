DROP DATABASE webtDoctrine;
CREATE DATABASE webtDoctrine;
USE webtDoctrine;

create table Game (
    pk_id INTEGER primary key auto_increment,
    player1 varchar(50),
    player2 varchar(50),
    symbol1 varchar(10),
    symbol2 varchar(10),
    date datetime
);