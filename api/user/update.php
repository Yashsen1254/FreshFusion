<?php

require ('../../includes/init.php');

$Id = $_POST['Id'];
$roleId = $_POST["roleId"];
$Name = $_POST["Name"];
$Mobile = $_POST["Mobile"];
$Email = $_POST["Email"];
$Address = $_POST["Address"];

$query = "UPDATE users SET roleId=?, Name=?, Mobile=?, Email=?, Address=? WHERE Id=?";
$param = [$roleId, $Name, $Mobile, $Email, $Address, $Id];

execute($query, $param);

?>