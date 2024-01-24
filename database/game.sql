CREATE TABLE games(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    name VARCHAR(255) NOT NULL,
    id_admin int NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
) COMMENT '';