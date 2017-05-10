drop database if axists content;
create database content;
use content;
drop table if exists writers;
create table writers (
  username     varchar(16) primary key,
  password     varchar(16) not null,
  full_name    text
);

drop table if exists stories;

create table stories (
  id     int primary key auto_increment,
  writer       varchar(16) not null,       # внешний ключ writers.username
  page         varchar(16) not null,       # внешний ключ pages.code
  headline      text,
  story_text    text,
  picture       text,
  created        int,
  modified       int,
  published      int
);

drop table if exists pages;

create table pages (
  code          varchar(16) primary key,
  description text
);

drop table if exists writer_permissions;

create table writer_permissions (
  writer      varchar(16) not null,        # внешний ключ writers.username
  page        varchar(16) not null         # внешний ключ pages.code
);

drop table if exists keywords;

create table keywords (
  story       int not null,                # внешний ключ stories.id
  keyword     varchar(32) not null,
  weight       int not null
);

grant select, insert, update, delete
on content.*
to content@localhost identified by 'password';