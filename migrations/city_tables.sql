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

ALTER TABLE firms ADD `hidden` TINYINT NOT NULL AFTER `range_num`;
ALTER TABLE firms ADD `mdate` DATETIME NOT NULL AFTER `hidden`;
ALTER TABLE malls ADD `hidden` TINYINT NOT NULL AFTER `range_num`;
ALTER TABLE malls ADD `mdate` DATETIME NOT NULL AFTER `hidden`;

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

DELIMITER $$
DROP FUNCTION IF EXISTS geodist $$
CREATE FUNCTION geodist (
  src_lat DECIMAL(9,6), src_lon DECIMAL(9,6),
  dst_lat DECIMAL(9,6), dst_lon DECIMAL(9,6)
) RETURNS DECIMAL(6,2) DETERMINISTIC
  BEGIN
    SET @dist := 6371 * 2 * ASIN(SQRT(
                                     POWER(SIN((src_lat - ABS(dst_lat)) * PI()/180 / 2), 2) +
                                     COS(src_lat * PI()/180) *
                                     COS(ABS(dst_lat) * PI()/180) *
                                     POWER(SIN((src_lon - dst_lon) * PI()/180 / 2), 2)
                                 ));
    RETURN @dist;
  END $$
DELIMITER ;

CREATE TABLE IF NOT EXISTS firm_comments (
  id SERIAL PRIMARY KEY,
  id_firm BIGINT UNSIGNED NOT NULL,
  name VARCHAR (255) NOT NULL,
  text TEXT NOT NULL,
  parent BIGINT NOT NULL,
  creator BIGINT NULL,
  cdate DATETIME NOT NULL
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE firm_comments ADD status TINYINT NOT NULL AFTER text;

CREATE TABLE IF NOT EXISTS mall_comments (
id SERIAL PRIMARY KEY,
id_firm BIGINT UNSIGNED NOT NULL,
name VARCHAR (255) NOT NULL,
text TEXT NOT NULL,
status TINYINT NOT NULL,
parent BIGINT NOT NULL,
creator BIGINT NULL,
cdate DATETIME NOT NULL
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;

