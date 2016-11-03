<?PHP
include "connect.php";

function getImgName()
{
    $name = uniqid("IMG-") . ".png";
    return $name;
}

function uploadUserImage($user)
{
    file_put_contents("log.txt", print_r($_FILES, true));    
	$name = $_FILES['user']['name'];
	$tmpLoc = $_FILES['user']['tmp_name'];
	$type = $_FILES['user']['type'];
	$size = $_FILES['user']['size'];
	$err = $_FILES['user']['error'];
	if (empty($name))
	{
		echo "ERROR: Please browse for a file before clicking the upload button.";
		exit;
	}
	$extpos = strrpos($name, ".", 0);
	$ext = strtolower(substr($name, $extpos));
	$newName = getImgName();
	$path = "images/" . $newName;
    file_put_contents("log.txt", "LOL");        
	if ($ext != ".jpg" && $ext != ".jpeg" && $ext != ".png")
	{
		echo "ERROR: Only jpeg and png images are supported.";
		if (file_exists($tmpLoc))
			unlink($tmpLoc);
		exit;
	}
	if(move_uploaded_file($tmpLoc, $path))
	{
        file_put_contents("log.txt", "stuff");
		//addImageDb($path, $newName, $user);
	}
   	else
	{
		echo "move_uploaded_file function failed";
		exit;
	}
	
}


    function addImageDb($path, $name, $user)
    {
        $pdo = connect();
        
        date_default_timezone_set("Africa/Johannesburg");
        $sql = $pdo->query("USE matcha_db");
        $stmt = $pdo->prepare("INSERT INTO imagetable (image_id, image_url , date_created, user) 
            VALUES (:image_id, :image_url, :date_created, :user)");
        $stmt->bindParam(':image_id', $name);
        $stmt->bindParam(':image_url', $path);
        $date = date('Y-m-d H:i:s', time());
        $stmt->bindParam(':date_created', $date);
        $stmt->bindParam(':user', $user);
        $stmt->execute();

        $pdo = null;

    }

    	session_start();
        $user = "meck";
//	$user = $_SESSION['logged_on_user'];	
//	if ($_SESSION['logged_on_user'] == "")
//		exit;
file_put_contents("log.txt", "HELLO");
	if (file_exists('../images') == false)
	{
		echo "Directory not made, creating";
		mkdir('images');
	}
	if (isset($_FILES['user']))
	{
		uploadUserImage($user);	
	}
	else
	{
		echo "ERROR: Please browse for a file before clicking the upload button.";
		exit;
	}
?>