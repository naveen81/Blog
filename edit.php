<?php 
if (count($_POST))
{
    if ($_POST['title'] == '')
    {
        $error = "WARNING:'Title should not be empty'";
    } else
    {
        require_once "config.php";
	$query = "UPDATE `blogs` SET `title`='{$_POST['title']}', `content`='{$_POST['content']}' WHERE `id`=" . $_GET['id'];

        $result = $connection->query($query);

        if ($result)
        {
            $newId = $connection->insert_id;
        } else
        {
            echo $connection->error;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Blog</title>
	<style>
	h1 {
			color: Brown;
			font-family: Monotype Corsiva;
			text-align: center;
			font-size: 50px;
		}
		label {
			font-family: Monotype Corsiva;
			font-size: 30px;
			text-align: center;
		}
		</style>
</head>
<title> Edit your Blog</title>
<body bgcolor="#E6E6FA"><?php require "image.php";?>
<h1>
  Edit your blog
</h1><div align="center">
<?php
if (isset($error)) {
    echo "<span class=\"error\">" . $error . "</span>";
}
?></div>
<form method ="post">
<div align="center">
    <label for="title">Title:</label><br>
    <input id="title" type="text" name="title" placeholder="enter title here" />
    <br> <br> <br>  <br> 
	<label for="content" align="center"> Content:</label><br><br><div>
    <textarea type="text" style="width: 650px; height: 100px;" id="content" type="text" name="content" placeholder="Write content here"/></textarea></div></div>
    <br />
	<input type="submit"value="Submit"></div>
    </form>
</body>
</html>