DROP DATABASE IF EXISTS `cv-hub`;
CREATE DATABASE IF NOT EXISTS `cv-hub`;
USE `cv-hub`;


CREATE TABLE `user` (
  `id` int AUTO_INCREMENT,
  `first_name` varchar(50) not null,
  `last_name` varchar(50) not null,
  `email` varchar(100) UNIQUE,
  `phone_number` varchar(50),
  `password` VARCHAR(20),
  `gender` varchar(20) not null,
  `image`varchar(100),
  primary key(id)
) ;


CREATE TABLE exprience (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    description TEXT,
    email VARCHAR(50), 
    i_id INT 
   );

CREATE TABLE education (
    id INT AUTO_INCREMENT PRIMARY KEY,
    school VARCHAR(100),
    degree VARCHAR(100),
    from_date VARCHAR(10),
    to_date VARCHAR(10),
    grade VARCHAR(10),
    email VARCHAR(50), 
    i_id INT,
);


CREATE TABLE skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    skill_name VARCHAR(100),
    skill_level INT,
    email varchar(50),
    i_id int
);

CREATE TABLE information (
    id INT AUTO_INCREMENT PRIMARY KEY,
    u_email varchar(50),
    profession varchar(50),
    about_me TEXT,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    phone_number VARCHAR(15),
    email VARCHAR(50),
    picture_path VARCHAR(255)
);


CREATE TABLE experience (
    id INT AUTO_INCREMENT PRIMARY KEY,
    company VARCHAR(100), 
    profession VARCHAR(100), 
    from_date VARCHAR(50),     
    to_date VARCHAR(50),     
    email VARCHAR(50),  
    i_id INT          
);

ALTER TABLE experience
ADD colum description TEXT;

