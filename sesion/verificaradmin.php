 <?php

session_start();
$usu = $_POST["txtusu"];
$cla = $_POST["txtcla"];

include '../conexion.php';
$sql= "select * from usuarios where usu='$usu' and pwd='$cla'";
$res= pg_query($con,$sql);
$co=0;
while($arr= pg_fetch_array($res)){
    $co++;
    $_SESSION["xusu"]= $arr[9];
    $_SESSION["xrol"]= $arr[8];
    if($arr[8]==1){
         header("Location: http://localhost/AppWebPark/administrador/admin.php");
    }
    else if($arr[8]==2){
        header("Location:http://localhost/AppWebPark/propietarios/propietario.php");
    }
    else if($arr[8]==3){
        header("Location:http://localhost/AppWebPark/clientes/cliente.php");
    }
    else{
        header("Location: http://localhost/AppWebPark/superadmin/superadmin.php");
    }
}
if($co==0){
    header("Location: http://localhost/AppWebPark/index.php?msg=1");
}
mysqli_close($bd);


