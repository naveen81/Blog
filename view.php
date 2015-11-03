<?php
include("config.php");
$query = "SELECT *FROM `blogs` WHERE `id` =" . $_GET['id'];
$result = $connection->query($query);
$blogs = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>CodeKamp| <?=$blogs['title'] ?></title>
	<style>
	div {
    background-color: #b0e0e6;
		font-family:Monotype Corsiva;
		border:1px solid black;
    padding:5px;
	margin:30px;
	}
	body {
		font-style: italic;
		font-family: Times New Roman;
		font-size: 30px;
	}
	</style>
	<div align="center">
	<h1> <?=$blogs['title']?></h1>
	</div>
</head>
<body bgcolor="#E6E6FA"><?php require "image.php";?>
<br><br>
<?= $blogs['content']?><br><br>
<a href="edit.php?id=<?= $blogs['id'] ?>"><strong>Edit your Blog</strong></a>

  </body>
  </html>