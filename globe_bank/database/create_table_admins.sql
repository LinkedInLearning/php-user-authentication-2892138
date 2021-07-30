/*

  Start by creating a database and giving a MySQL user privileges to use it.

  CREATE DATABASE globe_bank;

  GRANT ALL PRIVILEGES ON globe_bank.* TO 'php_user'@'localhost'; 
  FLUSH PRIVILEGES;

	USE globe_bank;

*/

CREATE TABLE admins (
  id INT(11) NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(255),
  last_name VARCHAR(255),
  username VARCHAR(255),
  email VARCHAR(255),
  hashed_password VARCHAR(255),
  PRIMARY KEY (`id`)
);
