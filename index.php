<?php
include("config.php");

$query ="SELECT `id` ,`title` FROM `blogs`";
$result = $connection->query($query);
$listofBlogs=$result->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Blog| List of all blogs</title>
	<style>
	ul {
		font-style: italic;
		font-family: verdana;
		font-size: 20px;
	}
	h1 {
		background-color: #b0c4de;
		font-family:Times New Roman;
		border:1px dotted black;
        padding:5px;
	margin:30px;
	}
	</style>
</head>
<body bgcolor="#E6E6FA"><?php require "image.php";?>
<h1> List of all blogs:</h1>
<ul>
<?php
foreach ($listofBlogs as $blogs)
{echo '<li><a href="view.php?id='.$blogs['id'].'">'.$blogs['title'].'</a></li>' ;
echo "<br />";
}
?>
</ul><br />
<a href="create.php"><ul><strong>Add new blog</strong></ul></a>
  </body>
  </html>
  

  
  
  