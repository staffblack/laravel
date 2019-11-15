<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <!-- Syntax Highlighter -->
  <!-- Demo CSS -->
	<link rel="stylesheet" href="../flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>
</head>
<body class="loading">

<div id="container" class="cf">
 
	
        <div class="col-lg-6"><?php //izquierda?>
                    <div class="widget-box transparent">
                        <div id="carousel-home" class="flexslider">
                            <ul class="slides">
                                <?php
                                include 'conexion3.php';
                                $registros = mysqli_query($conexion, "SELECT * FROM slider ORDER BY id") or die("Problemas en el select:" . mysqli_error($conexion));
                                    while ($reg = mysqli_fetch_array($registros)) {
                                ?>
                                <li>
                                <div class="col-lg-12" onclick="location.href='<?php echo $reg['url']; ?>'">
                                    <div class="col-sm-4">
                                    <img src="<?php echo $reg['imagen']; ?>" width="100  px" class="img-thumbnail"/> 
                                    </div>   
                                    <div class="col-sm-6">
                                        <div class="col-sm-12">
                                            <h1 align="center"><?php echo $reg['titulo']; ?></h1> 
                                        </div>
                                        <div class="col-sm-12">
                                            <h3 align="center"><?php echo $reg['descripcion']; ?></h3> 
                                        </div>
                                        <div class="col-sm-6">
                                            <h3 align="center"><?php echo $reg['telefono']; ?></h3> 
                                        </div>
                                        <div class="col-sm-6">
                                            <h3 align="center"><?php echo $reg['direccion']; ?></h3> 
                                        </div>
                                    </div>   
                                </div>    
                                    
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                
            </div>
            <div class="col-lg-6"><?php //izquierda?>
                    <div class="widget-box transparent">
                        <div id="carousel-home" class="flexslider">
                            <ul class="slides">
                                <?php
                                include 'conexion3.php';
                                $registros = mysqli_query($conexion, "SELECT * FROM slider ORDER BY titulo") or die("Problemas en el select:" . mysqli_error($conexion));
                                    while ($reg = mysqli_fetch_array($registros)) {
                                ?>
                                <li>
                                <div class="col-lg-12" onclick="location.href='<?php echo $reg['url']; ?>'">
                                    <div class="col-sm-4">
                                    <img src="<?php echo $reg['imagen']; ?>" width="100  px" class="img-thumbnail"/> 
                                    </div>   
                                    <div class="col-sm-6">
                                        <div class="col-sm-12">
                                            <h1 align="center"><?php echo $reg['titulo']; ?></h1> 
                                        </div>
                                        <div class="col-sm-12">
                                            <h3 align="center"><?php echo $reg['descripcion']; ?></h3> 
                                        </div>
                                        <div class="col-sm-6">
                                            <h3 align="center"><?php echo $reg['telefono']; ?></h3> 
                                        </div>
                                        <div class="col-sm-6">
                                            <h3 align="center"><?php echo $reg['direccion']; ?></h3> 
                                        </div>
                                    </div>   
                                </div>    
                                    
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                
            </div>
            <div class="col-lg-6"><?php //izquierda?>
                    <div class="widget-box transparent">
                        <div id="carousel-home" class="flexslider">
                            <ul class="slides">
                                <?php
                                include 'conexion3.php';
                                $registros = mysqli_query($conexion, "SELECT * FROM slider ORDER BY url") or die("Problemas en el select:" . mysqli_error($conexion));
                                    while ($reg = mysqli_fetch_array($registros)) {
                                ?>
                                <li>
                                <div class="col-lg-12" onclick="location.href='<?php echo $reg['url']; ?>'">
                                    <div class="col-sm-4">
                                    <img src="<?php echo $reg['imagen']; ?>" width="100  px" class="img-thumbnail"/> 
                                    </div>   
                                    <div class="col-sm-6">
                                        <div class="col-sm-12">
                                            <h1 align="center"><?php echo $reg['titulo']; ?></h1> 
                                        </div>
                                        <div class="col-sm-12">
                                            <h3 align="center"><?php echo $reg['descripcion']; ?></h3> 
                                        </div>
                                        <div class="col-sm-6">
                                            <h3 align="center"><?php echo $reg['telefono']; ?></h3> 
                                        </div>
                                        <div class="col-sm-6">
                                            <h3 align="center"><?php echo $reg['direccion']; ?></h3> 
                                        </div>
                                    </div>   
                                </div>    
                                    
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                
            </div>
            <div class="col-lg-6"><?php //izquierda?>
                    <div class="widget-box transparent">
                        <div id="carousel-home" class="flexslider">
                            <ul class="slides">
                                <?php
                                include 'conexion3.php';
                                $registros = mysqli_query($conexion, "SELECT * FROM slider") or die("Problemas en el select:" . mysqli_error($conexion));
                                    while ($reg = mysqli_fetch_array($registros)) {
                                ?>
                                <li>
                                <div class="col-lg-12" onclick="location.href='<?php echo $reg['url']; ?>'">
                                    <div class="col-sm-4">
                                    <img src="<?php echo $reg['imagen']; ?>" width="100  px" class="img-thumbnail"/> 
                                    </div>   
                                    <div class="col-sm-6">
                                        <div class="col-sm-12">
                                            <h1 align="center"><?php echo $reg['titulo']; ?></h1> 
                                        </div>
                                        <div class="col-sm-12">
                                            <h3 align="center"><?php echo $reg['descripcion']; ?></h3> 
                                        </div>
                                        <div class="col-sm-6">
                                            <h3 align="center"><?php echo $reg['telefono']; ?></h3> 
                                        </div>
                                        <div class="col-sm-6">
                                            <h3 align="center"><?php echo $reg['direccion']; ?></h3> 
                                        </div>
                                    </div>   
                                </div>    
                                    
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                
            </div>
 
</div>

  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="../jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="js/shCore.js"></script>
  <script type="text/javascript" src="js/shBrushXml.js"></script>
  <script type="text/javascript" src="js/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.mousewheel.js"></script>
  <script defer src="js/demo.js"></script>

</body>
</html>