CREATE DATABASE crud_db;
USE crud_db;
CREATE TABLE `users`(
	`id` int(11) not null AUTO_INCREMENT,
    `name` varchar(50),
    `email` varchar(50),
    `mobile` varchar(15),
    PRIMARY key (`id`)
)