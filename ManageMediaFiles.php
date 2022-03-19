<?php
include 'Config.php';
include 'utils.php';
$target_dir = "uploads/";
$target_file = $target_dir . basename(getRandomString(5).$_FILES["photos"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["photos"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check file size
// if ($_FILES["photos"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  header("HTTP/1.1 500 Image Only");
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk != 0) {
  if (move_uploaded_file($_FILES["photos"]["tmp_name"], $target_file)) {
    InsertFileType($conn, $_FILES["photos"]["name"], $target_file, null, null);
    header("HTTP/1.1 200 OK");
    echo json_encode($target_file);
  } else {
    header("HTTP/1.1 500 Internal Server Error");
    echo "Sorry, there was an error uploading your file.";
  }
}

?>

