<?php
include '../conexion3.php';
$update_at=  '2019-09-15 00:45:31';
mysqli_query($conexion, "update estudiante
                          set cedula='$_REQUEST[cedula]',
                              nombres='$_REQUEST[nombres]',
                              apellidos='$_REQUEST[apellidos]',
                              password='$_REQUEST[password]'
                             
                        where cedula='$_REQUEST[cedula]'") or
  die("Problemas en el select:".mysqli_error($conexion));
  echo "El mail fue modificado con exito";
  
  header ('Location: estudiantes/edit?id='.$_REQUEST["cedula"].'');
?>
<meta http-equiv="Refresh" content="0;url=<?php echo 'estudiantes/edit?id='.$_REQUEST["cedula"].'';?>">