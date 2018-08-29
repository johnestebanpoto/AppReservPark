<?php
session_start();
$_SESSION["xusu"]="";
session_destroy();
header("Location:http://localhost/AppWebPark/index.php");

