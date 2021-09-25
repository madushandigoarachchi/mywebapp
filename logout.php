<?php
Session_start();
session_destroy();
echo "logout";
 header('refresh:0.5;URL=index.php');
?>