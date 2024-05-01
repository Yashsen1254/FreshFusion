<?php

require ('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM city WHERE Id = ?";
$param = [$Id];
$result = execute($query, $param);
header('location:../../pages/city/index.php');
?>