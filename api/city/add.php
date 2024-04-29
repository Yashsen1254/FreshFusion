<?php

require ('../../includes/init.php');
$name = $_POST["name"];
$query = "INSERT INTO city (name) VALUES (?)";
$param = [$name];
execute($query, $param);

?>