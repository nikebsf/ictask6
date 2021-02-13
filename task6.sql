create database task6;
use task6;

create table users (
userid int not null primary key auto_increment,
username varchar(50),
password varchar(50)
);

insert into users values(null, "admin", 123);
select * from users;

insert into users values(null, "admin123", 123123);
