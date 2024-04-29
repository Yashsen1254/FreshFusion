<?php

require('../../includes/init.php');
$Id = $_GET['id'];
$query = "DELETE FROM roles WHERE Id = ?";
$param = [$Id];
$result = execute($query,$param);
header('location:../../pages/role/index.php');
?>