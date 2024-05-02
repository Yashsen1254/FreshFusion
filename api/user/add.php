<?php

require ('../../includes/init.php');

$roleId = $_POST["roleId"];
$Name = $_POST["Name"];
$Mobile = $_POST["Mobile"];
$Email = $_POST["Email"];
$Address = $_POST["Address"];

$query = "INSERT INTO users (roleId,Name,Mobile,Email,Address) VALUES (?,?,?,?,?)";
$param = [$roleId, $Name, $Mobile, $Email, $Address];

execute($query, $param);

?>