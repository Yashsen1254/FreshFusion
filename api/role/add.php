<?php

require ('../../includes/init.php');
$name = $_POST["name"];
$querry = "INSERT INTO roles (name) VALUES (?)";
$param = [$name];
execute;

?>