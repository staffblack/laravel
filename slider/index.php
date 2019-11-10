<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


  <script>
var cont=0
function cambia() {
cont++;
switch(cont%4+1)
 {
     <?php
     $url1='https://www.educarecuador.gob.ec';
     $url2='https://educacion.gob.ec';
     $url3='https://educacion.gob.ec/sime';
     $url4='https://educacion.gob.ec/amie/';
     $url5='https://www.espe.edu.ec/';
     $url6='https://eva-mecapacito.educacion.gob.ec/';
     $url7='https://educacion.gob.ec/?s=SIGEE';
     $url8='https://www.epn.edu.ec/';
     ?>
 case 1:
 document.getElementById("fotocambia").src="img/1.png";
 document.getElementById("fotocambiau1").href="<?php echo $url1;?>";
 
 document.getElementById("fotocambia2").src="img/2.png";
 document.getElementById("fotocambiau2").href="<?php echo $url2;?>";
 
 
 document.getElementById("fotocambia3").src="img/3.png"; 
 document.getElementById("fotocambiau3").href="<?php echo $url3;?>";

 document.getElementById("fotocambia4").src="img/8.png"; 
 document.getElementById("fotocambiau4").href="<?php echo $url3;?>";

 break;
 case 2:
 document.getElementById("fotocambia").src="img/3.png";
 document.getElementById("fotocambiau1").href="<?php echo $url1;?>";
 
 document.getElementById("fotocambia2").src="img/4.png";
 document.getElementById("fotocambiau2").href="<?php echo $url2;?>";
 
 
 document.getElementById("fotocambia3").src="img/5.png"; 
 document.getElementById("fotocambiau3").href="<?php echo $url3;?>";

 document.getElementById("fotocambia4").src="img/7.png"; 
 document.getElementById("fotocambiau4").href="<?php echo $url3;?>";
 
 break;
 case 3:
 document.getElementById("fotocambia").src="img/6.png";
 document.getElementById("fotocambiau1").href="<?php echo $url1;?>";
 
 document.getElementById("fotocambia2").src="img/7.png";
 document.getElementById("fotocambiau2").href="<?php echo $url1;?>";
 
 
 document.getElementById("fotocambia3").src="img/8.png"; 
 document.getElementById("fotocambiau3").href="<?php echo $url3;?>";

 document.getElementById("fotocambia4").src="img/5.png"; 
 document.getElementById("fotocambiau4").href="<?php echo $url3;?>";
 break;
 case 4:
document.getElementById("fotocambia").src="img/1.png";
 document.getElementById("fotocambiau1").href="<?php echo $url1;?>";
 
 document.getElementById("fotocambia2").src="img/2.png";
 document.getElementById("fotocambiau2").href="<?php echo $url2;?>";
 
 
 document.getElementById("fotocambia3").src="img/7.png"; 
 document.getElementById("fotocambiau3").href="<?php echo $url3;?>";

 
 document.getElementById("fotocambia4").src="img/5.png"; 
 document.getElementById("fotocambiau4").href="<?php echo $url3;?>";
 
 break;
 }

}
function inicio() {
setInterval(cambia, 1000);
}
window.onload=inicio;
</script>


</head>
<body>

<div class="container">
    <br>
    <div class="col-lg-12 panel panel-default">
        12
    </div>  
    <div class="col-lg-3 panel panel-default">
        <div class="col-lg-12 panel panel-default">
            <a href="https://educacion.gob.ec/" id="fotocambiau1"> 
                <img id="fotocambia" src="img/1.png" class="img-fluid" alt="Responsive image"  width="200"> 
            </a>
        </div>
        <div class="col-lg-12 panel panel-default">
            <a href="1.png" id="fotocambiau2">
                <img id="fotocambia2" src="img/2.png"class="img-fluid" alt="Responsive image" width="200"> 
            </a>
        </div>
        <div class="col-lg-12 panel panel-default">
            <a href="1.png" id="fotocambiau3">
                <img id="fotocambia3" src="img/3.png"class="img-fluid" alt="Responsive image" width="200"> 
            </a>
        </div>
        <div class="col-lg-12 panel panel-default">
            <a href="1.png" id="fotocambiau4">
                <img id="fotocambia4" src="img/4.png"class="img-fluid" alt="Responsive image" width="200"> 
            </a>
        </div>
    </div>   
  
</div>

</body>
</html>

