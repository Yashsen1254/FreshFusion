<?php

require ('../../includes/init.php');
$Id = $_POST['Id'];
$branchId = $_POST["branchId"];
$productId = $_POST["productId"];
$Quantity = $_POST["Quantity"];

$query = "UPDATE purchase SET branchId=?, productId=?, Quantity=? WHERE Id=?";
$param = [$branchId, $productId, $Quantity, $Id];

execute($query, $param);

?>