CREATE DATABASE RadioTask;

USE RadioTask;

CREATE TABLE Song(
singer varchar(30) NOT NULL,
song varchar(30) NOT NULL,
album varchar(30) NOT NULL,
genre varchar(30) NOT NULL,
duration int NOT NULL,
played int DEFAULT 1,
PRIMARY KEY(singer,song)
);