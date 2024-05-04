DROP DATABASE IF EXISTS ajax_demo;

create database ajax_demo;

use ajax_demo;

create table users (
    id char(3),
    firstname char(30),
    lastname char(20),
    age integer,
    hometown char(30),
    job char(50)
);

insert into users values ('1','Peter','Griffin', 41 ,'Quahog','Brewery');
insert into users values ('2','Lois','Griffin' ,40 ,'Newport','Piano Teacher');
insert into users values ('3','Joseph','Swanson' ,39 ,'Quahog','Police Officer');
insert into users values ('4','Glenn','Quagmire' ,41 ,'Quahog','Pilot');

/*
    Table user
    +----+-----------+----------+-----+----------+----------------+
    | id | firstname | lastname | age | hometown | job            |
    +----+-----------+----------+-----+----------+----------------+
    | 1  | Peter     | Griffin  | 41  | Quahog   | Brewery        |
    | 2  | Lois      | Griffin  | 40  | Newport  | Piano Teacher  |
    | 3  | Joseph    | Swanson  | 39  | Quahog   | Police Officer |
    | 4  | Glenn     | Quagmire | 41  | Quahog   | Pilot          |
    +----+-----------+----------+-----+----------+----------------+
*/