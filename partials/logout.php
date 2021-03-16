<?php
session_start();

echo "logging you out..plz wait";
session_destroy();
header("location:/forum/index.php");
?>