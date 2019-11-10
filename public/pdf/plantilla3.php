<?php
require 'fpdf/fpdf.php';

class PDF extends FPDF
{
    
    function Header() 
    {
        
        
        $this->Image('banner.jpg' , 10 ,10, 40 , 20,'JPG');
        $this->SetFillColor(230,230,230);
        $this->SetFont('Arial', 'B', '12');
         $this->Cell(180,6, utf8_decode('                                                    INSTITUCIÓN EDUCATIVA FISCAL "GENERAL PÍNTAG"'),0,1,'c',0);
        $this->Cell(180,6, '                                                                 PINTAG - QUITO - ECUADOR',0,1,'c',0);
        $this->Cell(180,6,'                                         '.utf8_decode('          INFORME PARCIAL DE APRENDIZAJES'),0,1,'c',0);
        $this->Cell(180,6,'                                                             '.utf8_decode('   AÑO LECTIVO 2019-2020'),0,1,'c',0);
        $this->Cell(180,6, '                                                              '.utf8_decode('   Jornada '.$_REQUEST['modalidad']),0,1,'c',0);
        $this->SetFont('Arial', 'B', '10');
        $this->Cell(180,6, '',0,1,'c',0);
       
        $this->Ln(2);
     
        
    }
    
    function Footer() {
       
        $this->SetY(-15);
        $this->SetFont('Arial','I', 10);
        $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'c');
    }
    
    
}

?>