create database if not exists web2;

create table if not exists web2.users ('id' int(11) auto_increment, 'name' varchar(255), 'password' varchar(255), 'email' varchar(255), unique(name) ,primary key(id)); 



