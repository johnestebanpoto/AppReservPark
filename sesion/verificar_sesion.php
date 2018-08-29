<?php 
    session_start(); 
    function verificar(){
    if (!isset($_SESSION['xusu'])){
        header("Location:http://localhost/AppWebPark/index.php");
        return 0;
    }
    if ($_SESSION['xusu'] == "" ){
        header("Location:http://localhost/AppWebPark/index.php");
        return 0;
    }
    return 1;
    }
?>