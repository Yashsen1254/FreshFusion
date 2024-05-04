<?php

require ('../../includes/init.php');

$roleId = $_POST["roleId"];
$Name = $_POST["Name"];
$Mobile = $_POST["Mobile"];
$Email = $_POST["Email"];
$Address = $_POST["Address"];
$Password = $_POST["Password"];

$query = "INSERT INTO users (roleId,Name,Mobile,Email,Address,Password) VALUES (?,?,?,?,?,?)";
$param = [$roleId, $Name, $Mobile, $Email, $Address, $Password];

execute($query, $param);

?>