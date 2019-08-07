CREATE TABLE IF NOT EXISTS `users` (
    id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    country VARCHAR(30) NOT NULL,
    doctor_id INT(11) NOT NULL
);


INSERT INTO `users` (id, name, lname, country, doctor_id) VALUES (NULL, 'Henry', 'Walker', 'Hungary', '3');
INSERT INTO `users` (id, name, lname, country, doctor_id) VALUES (NULL, 'John', 'Hudson', 'Germany', '1');
INSERT INTO `users` (id, name, lname, country, doctor_id) VALUES (NULL, 'Peter', 'Parker', 'Lithuania', '5');
INSERT INTO `users` (id, name, lname, country, doctor_id) VALUES (NULL, 'Thomas', 'Johnson', 'France', '2');
INSERT INTO `users` (id, name, lname, country, doctor_id) VALUES (NULL, 'Vanessa', 'Curtis', 'Italy', '4');
INSERT INTO `users` (id, name, lname, country, doctor_id) VALUES (NULL, 'Lucy', 'Butler', 'France', '3');
INSERT INTO `users` (id, name, lname, country, doctor_id) VALUES (NULL, 'Stephanie', 'Campbell', 'Norway', '5');
INSERT INTO `users` (id, name, lname, country, doctor_id) VALUES (NULL, 'David', 'Price', 'Sweden', '1');
INSERT INTO `users` (id, name, lname, country, doctor_id) VALUES (NULL, 'Audrey', 'Jones', 'France', '4');
INSERT INTO `users` (id, name, lname, country, doctor_id) VALUES (NULL, 'Daniel', 'Smith', 'Italy', '3');

ALTER TABLE `users` CHANGE `name` `name` VARCHAR(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;
