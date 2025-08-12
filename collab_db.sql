CREATE DATABASE collab_db;
USE collab_db;


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255)
);
