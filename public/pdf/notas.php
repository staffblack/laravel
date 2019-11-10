<?php
include 'plantilla3.php';
require '../../conexion3.php';

$estudiante=mysqli_query($conexion,"select  * from estudiante where cedula = '$_REQUEST[cedula]'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($es=mysqli_fetch_array($estudiante))
{
    $nombres=$es['nombres'];
    $apellidos=$es['apellidos'];
}

$nivel=mysqli_query($conexion,"select  * from nivel where id = '$_REQUEST[nivel]]'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($ni=mysqli_fetch_array($nivel))
{
    $curso='Curso:  '.$ni['curso'];
    $paralelo=$ni['paralelo'];
}

$pdf= new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(230,230,230);
$pdf->SetFont('Arial', '', '8');

//$pdf->Cell(190,6, '                                                                          '.,0,1,'c',0);
$pdf->Cell(190,4, 'Nombre Estudiante: '.$nombres.' '.$apellidos,0,1,'c',0);
$pdf->Cell(190,4, $curso.':   Paralelo:'.$paralelo.'                                                                    Tutor:'.utf8_decode($_REQUEST['nombretutor']),0,1,'c',0);
$pdf->Cell(190,4, '',0,1,'c',0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(90,10, 'ASIGNATURAS',1,0,'c',0);
$pdf->Cell(50,10, 'CALIFICACIONES',1,0,'c',0);
$pdf->Cell(55,10, '',1,1,'c',0);
$pdf->SetFont('Arial', '', '10');

$registros2=mysqli_query($conexion,"select  proyectoescolar as proyectoescolar, informe ,no.dhi as dhi,no.cedula_estudiante, ma.nombre AS materia , no.nota AS nota, no.alcance AS alcance from notas AS no INNER JOIN estudiante AS es ON no.cedula_estudiante = es.cedula INNER JOIN materia AS ma ON ma.id = no.id_materia where no.cedula_estudiante='$_REQUEST[cedula]' and no.id_bloque='$_REQUEST[id_bloque]'") or
  die("Problemas en el select:".mysqli_error($conexion));
$suma=0;
$contador=0;
$datos = array();

while ($reg2=mysqli_fetch_array($registros2))

{
    $dhi=$reg2['dhi'];
    $pe=$reg2['proyectoescolar'];
    $informe=$reg2['informe'];
    
	
$contador++;
$materiaArray[$contador]=substr($reg2['materia'], 0, 11);

$notaArray[$contador]=$reg2['nota']; 

$nota=($reg2['nota']);
$pdf->SetFont('Arial','',8);
$pdf->Cell(90,6, html_entity_decode($reg2['materia']),1,0,'c',0); 

$pdf->Cell(50,6, ($reg2['nota']),1,0,'c',0);
$pdf->SetFont('Arial', 'B', '8');
$pdf->Cell(55,6, html_entity_decode($reg2['alcance']),1,1,'c',0);
$suma=$nota+$suma;
}


$promedio=$suma/$contador;
$promedio=round($promedio,2);
$pdf->Cell(90,4, html_entity_decode('Promedio de Rendimiento Bloque'.$_REQUEST['id_bloque']),1,0,'c',0);
$pdf->Cell(50,4, $promedio,1,0,'c',0);
if($promedio<=5)
{
	$escala='No alcanza los Aprendizaje';
}
elseif(($promedio>=6)&&($promedio<=7)){
	$escala='Proximos a alcanzar los apr.';
}
elseif(($promedio>=8)&&($promedio<=9)){
	$escala='Alcanzan los aprendizajes requeridos';
}
else{
	$escala='Supera los Aprendiza';
}

//$int_cast = (int)$float_a;
$pdf->Cell(55,4,  utf8_encode($escala),1,1,'c',0);

if(($curso=='Octavo')or($curso=='Noveno')or($curso=='Decimo')){
$pdf->SetFont('Arial','B',8);
$pdf->Cell(195,4, html_entity_decode('Desarrollo Humano Integral'),1,1,'c',0);
$pdf->SetFont('Arial','',8);
$pdf->MultiCell(195, 4,  $dhi, 1, 1);

$pdf->SetFont('Arial','B',8);
$pdf->Cell(195,4, html_entity_decode('Proyecto Escolar'),1,1,'c',0);
$pdf->SetFont('Arial','',8);
$pdf->MultiCell(195, 4,  $pe, 1, 1);

}
else{
$pdf->SetFont('Arial','B',8);
$pdf->Cell(195,4, html_entity_decode('Observacion del Tutor'),1,1,'c',0);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(195, 4,  $informe, 1, 1);
}


$pdf->SetFont('Arial', 'B', '8');
$pdf->Cell(195,4, html_entity_decode('                                          ESCALA'),1,1,'c',0);
$pdf->SetFont('Arial', '', '8');

$pdf->Cell(70,4, 'Cualitativa',1,0,'c',0);
$pdf->Cell(30,4, 'Cuantitativa',1,0,'c',0);
$pdf->Cell(65,4, 'Cualitativa',1,0,'c',0);
$pdf->Cell(30,4, 'Cuantitativa',1,1,'c',0);

$pdf->SetFont('Arial', '', '8');
$pdf->Cell(70,4, 'Dominan los aprendizajes requeridos',1,0,'c',0);
$pdf->Cell(30,4, '[9, 10]',1,0,'c',0);
$pdf->Cell(65,4, 'Alcanzan los aprendizajes requeridos',1,0,'c',0);
$pdf->Cell(30,4, '[7, 9)',1,1,'c',0);

$pdf->Cell(70,4, utf8_decode('Próximos a alcanzar los aprendizajes requeridos'),1,0,'c',0);
$pdf->Cell(30,4, '[5, 7)',1,0,'c',0);
$pdf->Cell(65,4, 'No alcanzan los aprendizajes requeridos',1,0,'c',0);
$pdf->Cell(30,4, '[0, 5)',1,1,'c',0);
$pdf->SetFont('Arial', 'B', '12');    
$pdf->Cell(195,3, '',0,1,'c',0);
$pdf->Cell(195,4, '                                                        Grafico de Notas',0,1,'c',0);
$pdf->SetFont('Arial', '', '8');

include 'grafico.php';
$pdf->Output('D','notas'.$_REQUEST['cedula'].'notas.pdf');

?>

