<?php
if (count($_POST))
{
    if ($_POST['title'] == '')
    {
        $error = "WARNING:'Title should not be empty'";
    } else
    {
        require_once "config.php";
        $query = "INSERT INTO `blogs` (`title`, `content`) VALUES ('{$_POST['title']}', '{$_POST['content']}')";

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
    <title> Add new Blog</title>
	<style>
        #abcd {
            display: block;
            margin-bottom: 15px;
        }
        .error {
            background-color: yellow;
        }
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
<body bgcolor="#e0ffff"><?php require "image.php";?>
<h1>
  Create a new Blog
</h1>

<form method ="post" action="create.php">
<div align="center">
    <label for="title">Title:</label><br>
    <input id="title" type="text" name="title" placeholder="enter title here" />
    <br> <br> <br>  <br> 
	<label for="content" align="center"> Content:</label><br><br>
	<div>
    <textarea type="text" style="width: 650px; height: 100px;" id="content" type="text" name="content" placeholder="Write content here"/></textarea>
	</div>
</div>
    <br />
	<input type="submit" name="submit" value="Submit"></div>
    </form>
</body>
</html>
