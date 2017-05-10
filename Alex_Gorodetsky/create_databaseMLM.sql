create database mlm;
use mlm;
create table lists
 (
    listid int auto_increment not null primary key,
    listname char(20) not null,
    blurb varchar(255)
 );
create table subscribers
 (
    email char(100) not null primary key,
    realname char(100) not null,
    mimetype char(1) not null,
    password char(16) not null,
    admin tinyint not null
 );
# хранит отношение между подписчиком и списком рассылки
create table sub_lists
 (
    email char(100) not null,
    listid int not null
 );
create table mail
 (
    mailid int auto_increment not null primary key,
    email char(100) not null,
    subject char(100) not null,
    listid int not null,
    status char(10) not null,
    sent datetime,
    modified timestamp
 );
# хранит изображени, которые отправляются с конкретным сообщением
create table images
 (
    mailid int not null,
    path char(100) not null,
    mimetype char(100) not null
 );
grant select, insert, update, delete
on mlm.*
to mlm@localhost identified by 'password';

insert into subscribers values
('admin@localhost', 'Administrative User', 'H', password('admin'), 1);