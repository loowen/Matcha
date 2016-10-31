<?PHP

include "connect.php";

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$age = $_POST['Age'];
$gender = $_POST['Gend'];
$sexpref= $_POST['Pref'];
$first=$_POST['first'];
$last=$_POST['last'];
$hshed = hash("whirlpool", $password);

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
    header("Location: index.php?err=1");
}

if (strlen($password) < 6)
{
    echo "ERROR";
    header("Location: index.php?err=2");
}

if (strlen($username) < 6)
{
    echo "ERROR";
    header("Location: index.php?err=3");
}

if ($password != $_POST['confpass'])
{
    echo "ERROR";
    header("Location: index.php?err=4");
}

if(!isset($gender) || !isset($sexpref))
{
    header("Location: index.php?err=5");
}

if($age < 18)
{
    header("Location: index.php?err=6");
}

if (!pregmatch('/^([a-zA-Z0-9.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/', $email))
{
    header("Location: /index.php?err=8");
}

if(!isset($first) || !isset($last))
{
    header("Location: index.php?err=8");
}

$stmt = $pdo->prepare("INSERT INTO `users` ( `Username`, `password`, `email`, `Firstname`, `Lastname`)
    VALUES (:username, :password, :email, :first, :last)");
echo" prepare ";
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password',$hshed);
    $stmt->bindParam(':first',$first);
    $stmt->bindParam(':last', $last);
    echo" code ";
    $stmt->execute();
    echo" executed ";
    $stmt=$pdo->query("INSERT INTO `profiles` ( `Username`, `Age`, `Gender`, `SexualPref`)
        VALUES (:username, :age, :gender, :sexpref)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':sexpref', $sexpref);
    $stmt->execute();
    $subject="Pic Snap Acc Verify";
    $message="Please click the link to verify your account: http://localhost:8080/camagru/verify.php?name=$username&pword=$hshed&code=$code";
    mail($email,$subject,$message);
header("Location: login.php");
echo "Records added successfully.\n";
?> 