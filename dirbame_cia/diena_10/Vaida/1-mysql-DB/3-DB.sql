show databases;


-- pasirinkti BD darbui
use mysql;

show tables;

SELECT   *   FROM   user;

SELECT `User`, `Grant_priv` FROM `user`;
$mm = mysqli_query("SELECT User Grant_priv FROM user");
