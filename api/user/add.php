<?php

require ('../../includes/init.php');

$branchId = $_POST['branchId'];
$roleId = $_POST["roleId"];
$Name = $_POST["Name"];
$Mobile = $_POST["Mobile"];
$Email = $_POST["Email"];
$Address = $_POST["Address"];
$Password = $_POST["Password"];

$query = "INSERT INTO Users (branchId,roleId,Name,Mobile,Email,Address,Password) VALUES (?,?,?,?,?,?,?)";
$param = [$branchId,$roleId, $Name, $Mobile, $Email, $Address, $Password];

execute($query, $param);

?>