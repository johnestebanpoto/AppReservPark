<?php
include '../fpdf/fpdf.php';

class PDF extends FPDF{
    function Header() {
        $this->SetTextColor(0,0,250);
        //$this->Image("images/logo.jpg", 10, 8, 18);
        $this->SetFont("Arial","B" ,15);
        $this->Cell(0,10,"MI PARQUEADERO",0,0,"C");
        $this->Ln(10);
        $this->Cell(0,10,"Reporte de Administradores",0,0,"C");
        $this->Ln(14);
    }
    
    function Footer() {
        $this->SetY(-15);
        $this->SetFont("Arial","I" ,9);
        $this->Cell(0,10,"Pag. " . $this->PageNo() . " de {nb}" ,0,0,"C");
    }
}


$doc = new PDF();
$doc->AliasNbPages();
$doc->AddPage();
$doc->SetFont("arial","B",14);
$doc->Cell(0,10,"Listado de Administradores",0,0,"C");
$doc->Ln(9);

$doc->SetFont("arial","B",10);
$doc->Cell(30,8,"Cedula",1,0);
$doc->Cell(40,8,"Nombre",1,0);
$doc->Cell(20,8,"Usuario",1,0);
$doc->Cell(20,8,"Password",1,0);
$doc->Cell(30,8,"Telefono",1,0);
$doc->Cell(50,8,"Email",1,1);

$doc->SetFont("arial","",10);

include '../conecta.php';
$bd=  conectar();
$sql = "select cc_admin, nombre_admin, usuario_admin, password_admin,telefono_admin,email_admin from administradores";
$res = mysqli_query($bd, $sql);
while ($arr = mysqli_fetch_array($res)){
    $doc->Cell(30,8,$arr[0],1,0);
    $doc->Cell(40,8, utf8_decode($arr[1]),1,0);
    $doc->Cell(20,8,$arr[2],1,0); 
    $doc->Cell(20,8,$arr[3],1,0); 
    $doc->Cell(30,8,$arr[4],1,0); 
    $doc->Cell(50,8,$arr[5],1,1); 
}
mysqli_close($bd);
$doc->Output();
