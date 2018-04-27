# Vulnerable web app

Vulnerable web app for security beginners 

# Deploy:

* *DB root password = root **

mysql console:
```SQL
create database bank2;
use bank2;
create table user (id INT NOT NULL AUTO_INCREMENT, username CHAR(100) NOT NULL, password CHAR(32) NOT NULL, money INT, PRIMARY KEY (id));
create table news (id INT NOT NULL AUTO_INCREMENT, title CHAR(100) NOT NULL, text TEXT(5000) NOT NULL, PRIMARY KEY (id));
```
