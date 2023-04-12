use webtdoctrine;

insert into player(name) values ('Nenad');
insert into player(name) values ('Nils');
insert into player(name) values ('Luki');
insert into player(name) values ('Markus');
insert into player(name) values ('Dani');

insert into Game(fk_pk_player1, fk_pk_player2, symbol1, symbol2, date) values (1, 2, 'Stein', 'Schere', '2002-10-11 10:25:30');
insert into Game(fk_pk_player1, fk_pk_player2, symbol1, symbol2, date) values (1, 4, 'Stein', 'Papier', '2005-10-11 10:25:30');
insert into Game(fk_pk_player1, fk_pk_player2, symbol1, symbol2, date) values (2, 4, 'Papier', 'Schere', '2005-05-05 10:25:30');
insert into Game(fk_pk_player1, fk_pk_player2, symbol1, symbol2, date) values (5, 3, 'Stein', 'Stein', '2002-09-01 10:25:30');
insert into Game(fk_pk_player1, fk_pk_player2, symbol1, symbol2, date) values (5, 3, 'Papier', 'Stein', '2004-01-11 10:25:30');