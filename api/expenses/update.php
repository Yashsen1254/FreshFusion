<?php

require ('../../includes/init.php');
$Id = $_POST['Id'];
$BranchId = $_POST['BranchId'];
$Name = $_POST['Name'];
$Amount = $_POST['Amount'];

$query = "UPDATE expenses SET BranchId=?, Amount=?, Name=? WHERE Id=?";
$param = [$BranchId, $Amount, $Name, $Id];

$result = execute($query, $param);

?>