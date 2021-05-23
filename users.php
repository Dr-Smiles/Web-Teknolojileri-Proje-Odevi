<?php
	include("connection.php");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT id, user_name, password FROM users ORDER BY id";

$result = mysqli_query($con, $sql);

// Fetch all
if ($result = mysqli_query($con, $sql)) {
  while ($obj = mysqli_fetch_object($result)) {
    printf("%s.kullanıcının adı: %s". "\t". "şifresi:(%s)\n",$obj->id, $obj->user_name, $obj->password);
    echo nl2br("\n");
  }
  mysqli_free_result($result);
}

mysqli_close($con);
?>
