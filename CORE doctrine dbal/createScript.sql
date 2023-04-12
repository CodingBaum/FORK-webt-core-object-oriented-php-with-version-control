DROP DATABASE webtDoctrine;
CREATE DATABASE webtDoctrine;
USE webtDoctrine;

create table Player
(
    pk_id INTEGER primary key auto_increment,
    name  varchar(50)
);

create table Game
(
    pk_id         INTEGER primary key auto_increment,
    fk_pk_player1 INTEGER,
    fk_pk_player2 INTEGER,
    symbol1       varchar(10),
    symbol2       varchar(10),
    date          datetime
);

alter table Game add foreign key (fk_pk_player1) references Player(pk_id);
alter table Game add foreign key (fk_pk_player2) references Player(pk_id);
