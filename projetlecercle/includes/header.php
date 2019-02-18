<?php include_once("includes/db.php") ?>
<?php session_start(); ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>le cercle</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main>
<header>
	<h1>Cabinet dentaire des Harkis</h1>


</header>
<nav>
	<ul>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="calendrier.php">calendrier</a></li>
		<?php if (isset($_SESSION['user'])){?>
		<li><a href="membres.php">Espace Membres</a></li>
		<?php } 
		else {?>
		<li><a href="inscription.php">Inscription</a></li>
		<?php } ?>


	</ul>


</nav>