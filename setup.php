<?
/** This is the setup file. It runs on every access to the index.php page untill you remove it (once you are setup) and remove the link to it. **/

include_once("classes/Database.php");

$db = NEW DB;

// Create the main user table. This table will hold the basic user data that will be accessed by the Users.php Class file

$UserTable = "CREATE TABLE IF NOT EXISTS users( uid int NOT NULL AUTO_INCREMENT PRIMARY KEY, user_name VARCHAR(100), first_name VARCHAR(100), last_name VARCHAR(100), email_address VARCHAR(200), profile_pic blob, passwd VARCHAR(255))";

$db->runQuery($UserTable);

// Clear the contents of the users Table and add the main admin account

$UserTableTruncate = "TRUNCATE TABLE users";
$db->runQuery($UserTableTruncate);

$AdminAccount = "INSERT INTO users (user_name, first_name, last_name, email_address) VALUES('Admin', 'Demo', 'Admin', 'Admin@PHPUserSystem.fake.com')";
$db->runQuery($AdminAccount);

?>