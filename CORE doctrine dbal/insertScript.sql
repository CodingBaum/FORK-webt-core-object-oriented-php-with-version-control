use webtdoctrine;

insert into player(pk_name) values ('NENAD');
insert into player(pk_name) values ('NILS');
insert into player(pk_name) values ('LUKI');
insert into player(pk_name) values ('MARKUS');
insert into player(pk_name) values ('DANI');

insert into Game(fk_pk_player1, fk_pk_player2, symbol1, symbol2, date) values ('NENAD', 'NILS', 'Stein', 'Schere', '2002-12-12 10:25:30');
insert into Game(fk_pk_player1, fk_pk_player2, symbol1, symbol2, date) values ('NENAD', 'MARKUS', 'Stein', 'Papier', '2005-10-11 10:25:30');
insert into Game(fk_pk_player1, fk_pk_player2, symbol1, symbol2, date) values ('NILS', 'MARKUS', 'Papier', 'Schere', '2005-05-05 10:25:30');
insert into Game(fk_pk_player1, fk_pk_player2, symbol1, symbol2, date) values ('DANI', 'LUKI', 'Stein', 'Stein', '2002-09-01 10:25:30');
insert into Game(fk_pk_player1, fk_pk_player2, symbol1, symbol2, date) values ('DANI', 'LUKI', 'Papier', 'Stein', '2004-01-11 10:25:30');