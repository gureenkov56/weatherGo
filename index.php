<?php
if (!isset($_GET['city']) and !isset($_COOKIE['city'])) {
	header("Location: php/chooseCity.php");
} else if (isset($_GET['city'])){
	setcookie('city', $_GET['city'], time() + 3600 * 24);
	$city = $_GET['city'];
} else if(isset($_COOKIE['city'])){
	$city = $_COOKIE['city'];
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style/style.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link
			href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap"
			rel="stylesheet"
		/>
		<title>Weather Go</title>
	</head>

    <?php
    require_once ('php\apiConnect.php');
    ?>

	<body>
		<div id="centercontent">
			<div id="weathercontent">
				<div id="temp"><?=$currentTemp?></div>
				<div id="weathername"><?=$currentWeatherName?></div>
				<div id="mountain">
					<img src="image\mountain.png" alt="" id="mountainImg" />
				</div>
                <div id="changeLoc"><a href="php/chooseCity.php"><?=$city?></a></div>
			</div>
		</div>
	</body>
</html>

