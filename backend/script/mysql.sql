CREATE TABLE `user`
(
    id int primary key auto_increment,
    username varchar
(32),
    password varchar
(256) NOT NULL
);

INSERT INTO `user`
    (username, password)
VALUES('user', 'password');