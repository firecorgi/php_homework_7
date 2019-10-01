create database home_work7;
use home_work7;

drop table if exists users;
create table users
(
    id            int          not null AUTO_INCREMENT,
    cr_time       timestamp    not null default current_timestamp,
    name          varchar(10)  not null,
    surname       varchar(20)  not null,
    email         varchar(20)  not null,
    num           int          not null,

    primary key (id)
)
    engine = innodb,
    charset = utf8;