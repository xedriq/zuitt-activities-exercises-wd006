to launch mysql/mariadb in the terminal
mysql -u root // launches mariaDB with root username

create a database
CREATE DATABASE database_name;

to select a database
USE database_name;

show all tables inside the current database
SHOW TABLES;

creates a table
CREATE TABLE table_name;

show all columns of a table
DESCRIBE table_name;

ALTER TABLE table_name table_modifications
	-- RENAME TO : renames a table
	-- ADD COLUMN column_name column_description;
	-- DROP COLUMN column_to_be_dropped;

deletes a table
DROP TABLE table_name;