<?php

require ('../../includes/init.php');
$name = $_POST["name"];
$query = "INSERT INTO roles (name) VALUES (?)";
$param = [$name];
execute($query, $param);

?>