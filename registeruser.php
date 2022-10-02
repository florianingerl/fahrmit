<?php
include_once('mysql.php');
?>

<?php
$username = $_POST['username'];

echo "The username submitted " . $username;

$email = $_POST['email'];

echo "The email submitted  was " . $email;

$password = $_POST['password'];
echo "The password submitted  was " . $password;

try {
    $sql = "INSERT INTO users (username, email, password)  VALUES ('$username', '$email', '$password')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
} catch (Exception $exception) {
    echo ('Erreur : ' . $exception->getMessage());
}


?>

<?php
$target_dir = "assets/img/users/";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
$target_file = $target_dir . $username . "." . $imageFileType;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>