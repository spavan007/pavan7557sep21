<?php
session_start();

session_unset();
session_destroy();

header("location: ref_log.php");
exit;
?>