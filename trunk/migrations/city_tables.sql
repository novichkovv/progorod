CREATE DATABASE orehovo_zuevo CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS streets (
   id SERIAL PRIMARY KEY,
   name VARCHAR (255) NOT NULL,
   cdate DATETIME NOT NULL
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS buildings (
   id SERIAL PRIMARY KEY,
   id_street BIGINT NOT NULL,
   name VARCHAR (255) NOT NULL,
   cdate DATETIME NOT NULL
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS firms (
   id SERIAL PRIMARY KEY,
   id_subdivision BIGINT NOT NULL,
   id_net BIGINT NULL,
   name VARCHAR (255) NOT NULL,
   short_description VARCHAR (255) NOT NULL,
   site VARCHAR (255) NOT NULL,
   description TEXT NOT NULL,
   rating FLOAT NOT NULL,
   votes INT NOT NULL,
   range_num INT NOT NULL,
   creator BIGINT NOT NULL,
   cdate DATETIME NOT NULL
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS address_groups (
   id SERIAL PRIMARY KEY,
   type TINYINT NOT NULL,
   id_firm BIGINT NOT NULL,
   id_street BIGINT NOT NULL,
   id_building BIGINT NOT NULL,
   id_mall BIGINT NULL,
   phone VARCHAR (50) NOT NULL,
   longitude DECIMAL(9,6) NOT NULL,
   latitude DECIMAL(9,6) NOT NULL,
   cdate DATETIME NOT NULL
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS workdays_groups (
  id_address_group BIGINT NOT NULL,
  id_workday BIGINT NOT NULL
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS workdays (
  id SERIAL PRIMARY KEY,
  always TINYINT NOT NULL,
  daily TINYINT NOT NULL,
  weekday ENUM ("mon","tue","wed","thi","fri","sat","sun") NULL ,
  work_from TIME NULL,
  work_to TIME NULL
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS malls (
  id SERIAL PRIMARY KEY,
  name VARCHAR (255) NOT NULL,
  short_description VARCHAR (255) NOT NULL,
  site VARCHAR (255) NOT NULL,
  description TEXT NOT NULL,
  rating FLOAT NOT NULL,
  votes INT NOT NULL,
  range_num INT NOT NULL,
  creator BIGINT NOT NULL,
  cdate DATETIME NOT NULL
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;