<?php
	include("connection2.php");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT id, user_name, user_email, message FROM iletisim ORDER BY id";

$result = mysqli_query($con, $sql);

// Fetch all
if ($result = mysqli_query($con, $sql)) {
  while ($obj = mysqli_fetch_object($result)) {
    printf("%s ==> %s [%s] {%s}",$obj->id, $obj->user_name, $obj->user_email, $obj->message);
    echo nl2br("\n");
  }
  mysqli_free_result($result);
}

mysqli_close($con);
?>
