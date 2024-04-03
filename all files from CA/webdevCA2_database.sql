CREATE DATABASE user_management;

USE user_management;

CREATE TABLE user_management (
username VARCHAR (150) NOT NULL,
userpassword VARCHAR (150) NOT NULL,
useremail VARCHAR (150) NOT NULL
);

select * from user_management;
INSERT INTO user_management (username, userpassword, useremail) VALUES ('fff mmm', 'sss@ggg.com', '12345')