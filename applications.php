<?php
require_once('core/config.php');
require_once('core/functions.php');
$conn = connect();
sendMail ($conn);
close ($conn);
?>