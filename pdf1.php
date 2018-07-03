<?php
require('./funciones_librerias/fpdf181/fpdf.php');
session_start();
class PDF extends FPDF
{
//Cabecera de página
   function Header()
   {
    //Logo
    $this->Image("./imagenes/ico_isasa.png" , 10 ,5 , 25 , 25 , "PNG");
    //Arial bold 15
    $this->SetFont('Arial','B',15);
    //Movernos a la derecha
    $this->Cell(65);
    //Título
    $this->Cell(60,10,'ISASA',1,0,'C');
    //Movernos a la derecha
    $this->Cell(20);
    //Logo
    $this->Image("./imagenes/ico_isasa.png" , 175 ,5 , 25 , 25 , "PNG");
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
    $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
   }
   //Tabla simple
   function TablaSimple($header)
   {
    //Cabecera
    foreach($header as $col)
    $this->Cell(47,8,$col,1);
    $this->Ln();
    
      $this->Cell(47,7,"Cemento",1);
      $this->Cell(47,7,$_SESSION['ccem'],1);
      $this->Cell(47,7,"Sacos",1);
      $this->Cell(47,7,$_SESSION['tcem'],1);
      $this->Ln();
      $this->Cell(47,7,"Arena",1);
      $this->Cell(47,7,$_SESSION['care'],1);
      $this->Cell(47,7,"Sacos",1);
      $this->Cell(47,7,$_SESSION['tare'],1);
      $this->Ln();
      $this->Cell(47,7,"Ripio",1);
      $this->Cell(47,7,$_SESSION['crip'],1);
      $this->Cell(47,7,"Sacos",1);
      $this->Cell(47,7,$_SESSION['trip'],1);
      $this->Ln();
      $this->Cell(47,7,"Agua",1);
      $this->Cell(47,7,$_SESSION['cagu'],1);
      $this->Cell(47,7,"Litros",1);
      $this->Cell(47,7,$_SESSION['tagu'],1);
      $this->Ln();
      $this->Cell(47,7,"TOTAL",1);
      $this->Cell(47,7,'',1);
      $this->Cell(47,7,"",1);
      $this->Cell(47,7,$_SESSION['total'],1);
   }
   
}

$pdf=new PDF();
//Títulos de las columnas
$header=array('Material','Cantidad','Unidad','Precio CLP');
$pdf->AliasNbPages();
//Primera página
$pdf->AddPage();
$pdf->SetY(45);
//$pdf->AddPage();
$pdf->MultiCell(190,10,utf8_decode('Gracias por utilizar ISASA, esta es la cubicación de materiales para el radier cuyas medidas son:'));
$pdf->MultiCell(190,5,'');
$pdf->MultiCell(190,7,'Largo (m):');
$pdf->MultiCell(190,7,$_SESSION['lar']);
$pdf->MultiCell(190,7,'Ancho (m):');
$pdf->MultiCell(190,7,$_SESSION['anc']);
$pdf->MultiCell(190,7,'Espesor (m):');
$pdf->MultiCell(190,7,$_SESSION['esp']);
$pdf->MultiCell(190,10,'');
$pdf->TablaSimple($header);
$pdf->MultiCell(190,15,'');
$pdf->MultiCell(190,10,utf8_decode('*Para el cálculo de materiales se han considerado sacos de 25 kg (arena y cemento) y 20 kg (ripio). Los precios son referenciales.'));
$pdf->Output();
?>