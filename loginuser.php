<?php 
session_start();
?>
<?php
    include_once('mysql.php');
?>

<?php

echo "Hello";

$email = $_POST['email'];
$password = $_POST['password'];

try {
$sql = "select * from users where email='$email'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll();

if(count($result) == 0){
    echo "There wasn't any user with that email!";
}
else if($result[0]['password'] == $password ) {
    echo "You entered the right password and we log you in!";
    $_SESSION['loggedUser'] = $result[0];
}
else {
    echo "You entered the wrong password";
}

}catch(Exception $exception){
    echo $exception->getMessage(); 
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