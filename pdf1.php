    
<?php
require('./funciones_librerias/fpdf181/fpdf.php');
session_start();
class PDF extends FPDF
{
//Cabecera de página
   function Header()
   {
    //Logo
    $this->Image("./imagenes/ico_isasa.png" , 10 ,8, 35 , 38 , "PNG");
    //Arial bold 15
    $this->SetFont('Arial','B',15);
    //Movernos a la derecha
    $this->Cell(80);
    //Título
    $this->Cell(60,10,'ISASA',1,0,'C');
    //Salto de línea
    $this->Ln(20);
      
   }
   //Pie de página
   function Footer()
   {
    //Posición: a 1,5 cm del final
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
    //Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
   }
   //Tabla simple
   function TablaSimple($header)
   {
    //Cabecera
    foreach($header as $col)
    $this->Cell(40,7,$col,1);
    $this->Ln();
    
      $this->Cell(40,5,"Cemento",1);
      $this->Cell(40,5,$_SESSION['ccem'],1);
      $this->Cell(40,5,"Sacos",1);
      $this->Cell(40,5,$_SESSION['tcem'],1);
      $this->Ln();
      $this->Cell(40,5,"Arena",1);
      $this->Cell(40,5,$_SESSION['care'],1);
      $this->Cell(40,5,"Sacos",1);
      $this->Cell(40,5,$_SESSION['tare'],1);
      $this->Ln();
      $this->Cell(40,5,"Ripio",1);
      $this->Cell(40,5,$_SESSION['crip'],1);
      $this->Cell(40,5,"Sacos",1);
      $this->Cell(40,5,$_SESSION['trip'],1);
      $this->Ln();
      $this->Cell(40,5,"Agua",1);
      $this->Cell(40,5,$_SESSION['cagu'],1);
      $this->Cell(40,5,"Litros",1);
      $this->Cell(40,5,$_SESSION['tagu'],1);
      $this->Ln();
      $this->Cell(40,5,"TOTAL",1);
      $this->Cell(40,5,'',1);
      $this->Cell(40,5,"",1);
      $this->Cell(40,5,$_SESSION['total'],1);
   }
   
}

$pdf=new PDF();
//Títulos de las columnas
$header=array('Material','Cantidad','Unidad','Precio');
$pdf->AliasNbPages();
//Primera página
$pdf->AddPage();
$pdf->SetY(65);
//$pdf->AddPage();
$pdf->TablaSimple($header);
//Segunda página

$pdf->Output();
?>