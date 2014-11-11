CREATE DATABASE orehovo_zuevo CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS divisions (
   id SERIAL PRIMARY KEY,
   name VARCHAR (255) NOT NULL,
   id_route BIGINT UNSIGNED NOT NULL,
   keywords TEXT NOT NULL,
   description TEXT NOT NULL,
   title VARCHAR (255) NOT NULL,
   creator BIGINT UNSIGNED NOT NULL,
   cdate DATETIME NOT NULL
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS subdivisions (
   id SERIAL PRIMARY KEY,
   name VARCHAR (255) NOT NULL,
   id_route VARCHAR (255) NOT NULL,
   id_division BIGINT UNSIGNED NOT NULL,
   keywords TEXT NOT NULL,
   description TEXT NOT NULL,
   title VARCHAR (255) NOT NULL,
   creator BIGINT UNSIGNED NOT NULL,
   cdate DATETIME NOT NULL
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;