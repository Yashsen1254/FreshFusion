<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM roles WHERE Id = ?";
$param = [$Id];
$result = execute($query,$param);
header('location:../../pages/role/index.php');
?>