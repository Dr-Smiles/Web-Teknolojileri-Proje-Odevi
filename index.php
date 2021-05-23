<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="TR-tr" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
			<link rel="preconnect" href="https://fonts.gstatic.com">
			<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="adding.css">
      <script type="text/javascript" src="script.js"></script>
    <title>Admin Page</title>

    <style media="screen">
        .container-fluid{
        padding: 0 !important;
        }

    </style>
  </head>
  <body onload="startTime(), resimGoster(-1)">

    <div style="background-color:grey;">
      <div class="container-fluid">
        <div class="baslik">
          <a href="index.html">Lütfü Orhun İNAN</a> <c>/Admin View</c>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="topnavigatorbar" style="background-color: #b3b3b3;">
        <a href="users.php">Kullanıcılar</a>
        <a href="contact.php">İletişimler</a>
				<a href="logout.php">Logout</a>
        <div id="txt" class="time" style="padding: 12px 25px;"></div>
      </div>
    </div>

<div class="container-fluid " style="height:83vh; background-image:url('Varlık 1 yeni.png');background-size:cover;background-repeat:no-repeat;transform: scaleX(-1);filter:grayscale(100%);">

		<div class="container-fluid" style=" transform: scaleX(-1);">
			<div style=" padding: 50px;font-size: 150%;">
						Hello, <?php echo $user_data['user_name']; ?>
			</div>
		</div>

</div>

  </body>
</html>
