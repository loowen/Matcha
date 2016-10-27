<?PHP
include "connect.php";
$pdo = connect();
echo "Connected successfully\n";

// db creation
$pdo->query("DROP DATABASE IF EXISTS db_camagru");
$pdo->query("CREATE Database db_camagru");
echo "Database db_camagru created successfully\n";

//user table
$pdo->query("USE db_camagru");
$err = $pdo->query('CREATE TABLE `usertable` ( '.
    "username VARCHAR( 16 ) NOT NULL ,".
   "password VARCHAR( 130 ) NOT NULL, ".
    "email VARCHAR( 64 ) NOT NULL,".
    "code VARCHAR( 130 ) NOT NULL, ".
    "active VARCHAR( 32 ) NOT NULL ".
   ")");
if ($err == false)
{
    die("BAD");
}
echo "user table was created\n";

//image table
$pdo->query("USE db_camagru");
$err = $pdo->query('CREATE TABLE `imagetable` ( '.
    "image_id VARCHAR( 32 ) NOT NULL ,".
   "image_url VARCHAR( 128 ) NOT NULL, ".
    "date_created DATETIME NOT NULL,".
     "user VARCHAR( 32 ) NOT NULL".
   ")");
if ($err == false)
{
    die("BAD");
}
echo "image table was created\n";

//comment table
$pdo->query("USE db_camagru");
$err = $pdo->query('CREATE TABLE `commenttable` ( '.
    "username VARCHAR( 16 ) NOT NULL ,".
   "password VARCHAR( 255 ) NOT NULL, ".
    "email VARCHAR( 64 ) NOT NULL".
   ")");
if ($err == false)
{
    die("BAD");
}
echo "comment table was created\n";
 


?>
