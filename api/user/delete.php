<?php

require ('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM users WHERE Id = ?";
$param = [$Id];
$result = execute($query, $param);
header('location:../../pages/user/index.php');

?>