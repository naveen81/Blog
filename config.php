<?php

$connection = new mysqli('localhost' , 'root' , '' ,'blog_table');

if($connection->connect_error)
{
	echo $connection->error;
	die;
}
?>
