<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$cityId = $_POST['cityId'];
$Address = $_POST['Address'];
$Squarefeet = $_POST['Squarefeet'];
$OwnerName = $_POST['OwnerName'];

$query = "UPDATE branchdetails SET cityId=?, Address=?, Squarefeet=?, OwnerName=? WHERE Id=?";
$param = [$cityId,$Address,$Squarefeet,$OwnerName,$Id];

$result = execute($query,$param);

?>