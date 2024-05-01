<?php

require ('../../includes/init.php');

$cityId = $_POST["cityId"];
$Address = $_POST["Address"];
$Squarefeet = $_POST["Squarefeet"];
$OwnerName = $_POST["OwnerName"];

$query = "INSERT INTO branchdetails (cityId,Address,Squarefeet,OwnerName) VALUES (?,?,?,?)";
$param = [$cityId, $Address, $Squarefeet, $OwnerName];

execute($query, $param);

?>