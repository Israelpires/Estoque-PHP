drop database if exists store;
create database if not exists store;

use store;

create table if not exists category (
	id int primary key auto_increment,
    name varchar(32) not null
);

create table if not exists product (
	id int primary key auto_increment,
    name varchar(32) not null,
    quantity int not null,
    price float not null,
    cost float not null,
    categoryId int not null,
    foreign key (categoryId) references category(id)
);

insert into category(name) values ('Clothes');
insert into category(name) values ('Sneakers');
insert into category(name) values ('Accessories');
insert into category(name) values ('Hats');
insert into category(name) values ('Beauty');
insert into category(name) values ('Bags');
insert into category(name) values ('Fitness');
insert into category(name) values ('Backpacks');
