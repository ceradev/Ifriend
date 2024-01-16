-- Active: 1700591593723@@127.0.0.1@3306@ifriend
CREATE TABLE IF NOT EXISTS users(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    name VARCHAR(255) NOT NULL COMMENT 'Name',
    mail VARCHAR(50) COMMENT 'Mail', 
    password VARCHAR(20) COMMENT 'Password',
    create_at TIMESTAMP COMMENT 'Create Time',
    update_at TIMESTAMP COMMENT 'Update Time'
) COMMENT '';