<?php
include '../fpdf/fpdf.php';

class PDF extends FPDF{
    function Header() {
        $this->SetTextColor(0,0,250);
        //$this->Image("images/logo.jpg", 10, 8, 18);
        $this->SetFont("Arial","B" ,15);
        $this->Cell(0,10,"MI PARQUEADERO",0,0,"C");
        $this->Ln(10);
        $this->Cell(0,10,"Reporte de Propietarios",0,0,"C");
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
$doc->Cell(0,10,"Listado de Propietarios",0,0,"C");
$doc->Ln(9);

$doc->SetFont("arial","B",10);
$doc->Cell(30,8,"Cedula",1,0);
$doc->Cell(60,8,"Nombre",1,0);
$doc->Cell(40,8,"Apellido",1,0);

$doc->SetFont("arial","",10);

include '../conexion.php';
$sql = "select num_doc_usu, nom_usu, apellido_usu from usuarios;";
$res = pg_query($con, $sql);
while ($arr = pg_fetch_array($res)){
    $doc->Cell(30,8,$arr[0],1,0);
    $doc->Cell(60,8, utf8_decode($arr[1]),1,0);
    $doc->Cell(40,8,utf8_decode($arr[2]),1,0);    
}
pg_close($con);
$doc->Output();
