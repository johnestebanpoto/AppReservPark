<?php
$con=  pg_connect("host='localhost' dbname=reservPark port=5432 user=postgres password=mideidad") 
       or die ("Error de conexión".  pg_last_error());
?>

