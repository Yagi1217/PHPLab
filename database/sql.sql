create database uriage;

create table uriage.hanbai(id int not null primary key, shouhin_id int, uriage int);

create table uriage.shouhin(id int not null primary key, name varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci);

create user 'testuser'@'localhost' identified by 'testuser’;

grant all on uriage.* to 'testuser'@'localhost’;

insert into uriage.shouhin values (1, 'テレビ'), (2, 'DVD'), (3, 'パソコン');

insert into uriage.hanbai values (1,1, 320000), (2,2, 160000), (3,3, 180000), (4,1, 128000), (5,3, 98000), (6,2, 140000), (7,1, 175000);
