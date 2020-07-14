<?php
include_once('connection.php');
$sql1 = "UPDATE appointment SET appointment_status = \"free\" WHERE appointment_id=".$_GET['view_id'];
$result = mysqli_query($db,$sql1)
?>

