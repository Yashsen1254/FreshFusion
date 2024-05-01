<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM branchdetails WHERE Id = ?";
$param = [$Id];
$result = execute($query,$param);
header('location:../../pages/branchdetails/index.php');

?>