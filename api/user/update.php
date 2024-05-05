<?php

require ('../../includes/init.php');

$Id = $_POST['Id'];
$roleId = $_POST["roleId"];
$Name = $_POST["Name"];
$Mobile = $_POST["Mobile"];
$Email = $_POST["Email"];
$Address = $_POST["Address"];
$Password = $_POST["Password"];

$query = "UPDATE Users SET roleId=?, Name=?, Mobile=?, Email=?, Address=?, Password=? WHERE Id=?";
$param = [$roleId, $Name, $Mobile, $Email, $Address,$Password, $Id];

execute($query, $param);

?>