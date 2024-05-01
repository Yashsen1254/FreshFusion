<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM expenses WHERE Id = ?";
$param = [$Id];
$result = execute($query,$param);
header('location:../../pages/expenses/index.php');

?>