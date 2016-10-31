<?PHP

include "connect.php";

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$age = $_POST['Age'];
$gender = $_POST['Gend'];
$hshed = hash("whirlpool", $password);
$code = uniqid();

echo "user = $username  pass $hshed <br>";

$pdo = connect();
$pdo->query("USE db_camagru");

$stmt = $pdo->prepare("SELECT `username` FROM `usertable` WHERE username = :username OR email = :email");
$stmt->bindParam(':username', $username);
$stmt->bindParam(':email', $email);
$stmt->execute();

echo $stmt->rowCount();
if ($stmt->rowCount() > 0)
{
    echo "ERROR";
    header("Location: register.php?err=1");
}

if (strlen($password) < 6)
{
    echo "ERROR";
    header("Location: register.php?err=2");
}

if (strlen($username) < 6)
{
    echo "ERROR";
    header("Location: register.php?err=3");
}

if ($password != $_POST['confpass'])
{
    echo "ERROR";
    header("Location: register.php?err=4");
}

if($age)
echo" test ";
$stmt = $pdo->prepare("INSERT INTO `usertable` ( `username`, `password`, `email`, `code`, `active`)
    VALUES (:username, :password, :email, :code, :active)");
echo" prepare ";
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password',$hshed);
    $stmt->bindParam(':code',$code);
    $active="0";
    $stmt->bindParam(':active', $active);
    echo" code ";
    $stmt->execute();
    echo" executed ";
    $pdo = null;
    $subject="Pic Snap Acc Verify";
    $message="Please click the link to verify your account: http://localhost:8080/camagru/verify.php?name=$username&pword=$hshed&code=$code";
    mail($email,$subject,$message);
header("Location: login.php");
echo "Records added successfully.\n";
?> 