CREATE TABLE firms (
    id SERIAL PRIMARY KEY,
    name VARCHAR ( 255 ) NOT NULL,
    alias VARCHAR ( 255 ) NOT NULL,
    controller VARCHAR ( 255 ) NOT NULL,
    title VARCHAR ( 255 ) NOT NULL,
    short_description VARCHAR ( 255 ) NOT NULL,
    parent VARCHAR (255) NOT NULL,
    cdate DATETIME NOT NULL
)ENGINE=MyISAM;

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    name VARCHAR (255) NOT NULL,
    surname VARCHAR (255) NOT NULL,
    mail VARCHAR (255) NOT NULL,
    password VARCHAR (255) NOT NULL,
    cdate DATETIME NOT NULL
)ENGINE=MyISAM;