
--   create database
CREATE DATABASE common;

--
-- system_routes table
--

CREATE TABLE IF NOT EXISTS system_routes (
   id SERIAL PRIMARY KEY,
   project VARCHAR (40) NOT NULL,
   alias VARCHAR (255) NOT NULL,
   controller VARCHAR (255) NOT NULL,
   title VARCHAR (255) NOT NULL,
   parent INT NOT NULL
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO  `system_routes` (  `project` ,  `alias` ,  `controller` ,  `title` ,  `parent` )
VALUES (
'admin',  'users',  'users_controller.php',  'Пользователи', 0
);
INSERT INTO  `system_routes` (  `project` ,  `alias` ,  `controller` ,  `title` ,  `parent` )
VALUES (
'admin',  'users/list',  'users_controller.php',  'Список Пользователей', 1
);
INSERT INTO  `system_routes` (  `project` ,  `alias` ,  `controller` ,  `title` ,  `parent` )
VALUES (
'admin',  'users/groups',  'users_controller.php',  'Группы пользователей', 1
);
INSERT INTO `system_routes`( `project`, `alias`, `controller`, `title`, `parent`)
VALUES (
'admin','rights','rights_controller.php', 'Права', 0
);

CREATE TABLE IF NOT EXISTS users (
   id SERIAL PRIMARY KEY,
   mail VARCHAR (255) NOT NULL,
   password VARCHAR (255) NOT NULL,
   name VARCHAR (255) NOT NULL,
   surname VARCHAR (255) NOT NULL,
   phone VARCHAR (255) NOT NULL,
   id_user_group TINYINT NOT NULL,
   creator BIGINT UNSIGNED NOT NULL,
   cdate DATETIME NOT NULL
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS user_groups (
   id SERIAL PRIMARY KEY,
   name VARCHAR (255) NOT NULL,
   creator BIGINT UNSIGNED NOT NULL,
   cdate DATETIME NOT NULL
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS user_group_rights (
   id_system_route BIGINT UNSIGNED,
   id_group BIGINT UNSIGNED
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS cities (
   id SERIAL PRIMARY KEY,
   alias VARCHAR ( 255 ) NOT NULL UNIQUE,
   id_region BIGINT UNSIGNED NOT NULL,
   name VARCHAR ( 255 ) NOT NULL,
   name_genitive VARCHAR (255 ) NOT NULL,
   keywords TEXT NOT NULL,
   creator BIGINT UNSIGNED NOT NULL,
   cdate DATETIME NOT NULL
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS regions (
  id SERIAL PRIMARY KEY,
  alias VARCHAR ( 255 ) NOT NULL UNIQUE,
  name VARCHAR ( 255 ) NOT NULL,
  name_genitive VARCHAR (255 ) NOT NULL,
  keywords TEXT NOT NULL,
  creator BIGINT UNSIGNED NOT NULL,
  cdate DATETIME NOT NULL
)ENGINE=MyISAM,CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `system_routes`( `project`, `alias`, `controller`, `title`, `parent`)
VALUES (
  'admin','cities','', 'Города', 0
);

INSERT INTO `system_routes`( `project`, `alias`, `controller`, `title`, `parent`)
VALUES (
  'admin','cities/list','cities_controller.php', 'Города', 5
);

INSERT INTO `system_routes`( `project`, `alias`, `controller`, `title`, `parent`)
VALUES (
  'admin','cities/regions','cities_controller.php', 'Регионы', 5
);

