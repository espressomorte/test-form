<?php
  $email = clean($_POST['email']);
  $name = $_POST['name'];
  $phone = clean($_POST['phone']);
  $comment = $_POST['comment'];

if(!empty($email) && !empty($name) && !empty($phone) && !empty($comment)) {
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "localdb";
  $con = mysqli_connect($host,$username,$password,$dbname);

  $sql = "INSERT INTO COMMENTS (EMAIL, NAME, COMMENT) VALUES ('$email','$name','$comment')";

   if($_POST['notify'] == 'Yes'){
     mail("$email","Your comment is added","$comment");
   }
  $query = mysqli_query($con,$sql);

if ($_FILES['file_upload']['error'] === UPLOAD_ERR_OK) {
  if(!move_uploaded_file($_FILES['file_upload']['tmp_name'], 'uploads/' . $_FILES['file_upload']['name'])){
    die('Error uploading file - check destination is writeable.');
 }
}


}

function clean($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
  }
?>
