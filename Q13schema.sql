CREATE DATABASE IF NOT EXISTS ajaxdb;
USE ajaxdb;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE
);

INSERT INTO users (username) VALUES ('admin'), ('ram123'), ('sita_rai');