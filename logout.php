<?php
require_once "config.php"
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("Location:index.php?projet=0");
?>
