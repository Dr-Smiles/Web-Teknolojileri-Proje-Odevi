<?php
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
	<style type="text/css">

	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: #0066b8;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

<html lang="TR-tr" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
			<link rel="preconnect" href="https://fonts.gstatic.com">
			<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="adding.css">
      <script type="text/javascript" src="script.js"></script>
    <title>Giriş</title>

    <style media="screen">
        .container-fluid{
        padding: 0 !important;
        }

    </style>
  </head>
  <body onload="startTime(), resimGoster(-1)">

    <div class="arkamenu">
      <div class="container-fluid">
        <div class="baslik">
          <a href="index.html">Lütfü Orhun İNAN</a> <c>/Üye Ol</c>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="topnavigatorbar">
				<a href="ilgialanlarim.html">İlgi Alanlarım</a>
        <a href="ozgecmisim.html">Özgeçmişim</a>
        <a href="sehrim.html">Şehrim</a>
        <a href="iletisim.php">İletişim</a>
        <a href="login.php" style="float:right;">Login</a>
        <div id="txt" class="time" style="padding: 12px 25px;"></div>
      </div>
    </div>

<div class="container-fluid" style="height:600px; background-image:url('Varlık 1 yeni.png');background-size:cover;background-repeat:no-repeat;transform: scaleX(-1);">

		<div id="box" style="height:600px;transform: scaleX(-1);">

			<form method="post">
				<div style="font-size: 20px;padding-top:150px;color: white;">Üye Ol</div>

				<input id="text" type="text" name="user_name"><br><br>
				<input id="text" type="password" name="password"><br><br>

				<div class="row">
					<div class="col">
						<input id="button" type="submit" value="Signup">
					</div>
					<div class="col">
										<a href="login.php"><input id="button" style="text-align:center;" value="Giriş"></a><br><br>
					</div>
				</div>
			</form>
		</div>
</div>

    <div class="container-fluid altmenu flex-grow-1">
      <div class="row">
        <div class="col-sm-4" style="margin:10px; line-height: 1.8;">
          <h4>Okul Linkleri</h4>
          <a href="https://www.sakarya.edu.tr/" >Sakarya Üniversitesi Ana Sayfası</a><br>
          <a href="https://cs.sakarya.edu.tr/" >Bilgisayar Mühendisliği Ana Sayfası</a><br>
          <a href="https://ogrisl.sakarya.edu.tr/" >Sakarya Üniversitesi Öğrenci İşleri</a><br>
          <a href="https://sabis.sakarya.edu.tr/" >Sakarya Üniversitesi Bilgi Sistemi</a><br>
        </div>
        <div class="col-sm-4" style="margin:10px;">
          <h4>Önemli Linkler</h4>
          <a href="https://www.w3schools.com/default.asp" >W3 Schools</a><br>
          <a href="https://app.taggbox.com/" >RSS'ten HTML dönüştürücü</a><br>
          <a href="https://rss.app/" >RSS feed üreticisi</a><br>
          <a href="#" >Sakarya Üniversitesi Ana Sayfası</a><br>

        </div>
        <div class="col-sm-2" style="margin:10px;">
          <h4>Site Hakkında</h4>
          <p>Bu site Sakarya Üniversitesi Bilgisayar Mühendisliği
          Web Teknolojileri 2020-2021 ders projesi olarak hazırlanmıştır.</p>
        </div>
      </div>
    </div>

  </body>
</html>
