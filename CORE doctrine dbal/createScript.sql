DROP DATABASE webtDoctrine;
CREATE DATABASE webtDoctrine;
USE webtDoctrine;

create table Player
(
    pk_name varchar(50) primary key
);

create table Game
(
    pk_id         INTEGER primary key auto_increment,
    fk_pk_player1 varchar(50),
    fk_pk_player2 varchar(50),
    symbol1       varchar(10),
    symbol2       varchar(10),
    date          datetime
);

alter table Game add foreign key (fk_pk_player1) references Player(pk_name);
alter table Game add foreign key (fk_pk_player2) references Player(pk_name);
