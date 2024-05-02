<?php

require ('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM purchase WHERE Id = ?";
$param = [$Id];
$result = execute($query, $param);
header('location:../../pages/purchase/index.php');

?>