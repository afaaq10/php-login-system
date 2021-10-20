<?php
session_start();
session_destroy();
echo 'Logging you out...';
header("Location:final.php");

