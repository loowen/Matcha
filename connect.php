<?PHP

function connect()
{
    $dbhost = "mysql:host=127.0.0.1;";
    $dbuser = "root";
    $dbpass = "15hamllu";
    try
    {
        $pdo = new PDO($dbhost, $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e)
    {
        print ";-; " . $e->getMessage() . PHP_EOL;
        die();
    }
    return($pdo);
}
?>