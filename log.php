<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
//header("Location: main.html");
$con = mysqli_connect('localhost','root','','test2');
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
  echo "\n";
}
else {
  echo "Connected successfully \n";
}

// get the post records
$txtEmail = $_POST['txtEmail'];
$txtPwd = $_POST['txtPwd'];

//echo $txtName;
echo $txtEmail;
echo $txtPwd;
// database insert SQL code
$sql = "SELECT * FROM `creds` WHERE `email` = '$txtEmail' AND `password` = '$txtPwd'";

// insert in database
$rs = mysqli_query($con, $sql);

if($rs)
{
  echo '<script>alert("Logged in successfully")</script>';
  echo '<script>window.location.href = "home.html"</script>';
}
else {
  echo '<script>alert("Login Failed")</script>';
  echo '<script>window.location.href = "login.html"</script>';
}

?>
