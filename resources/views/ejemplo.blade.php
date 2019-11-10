
Generar pdf con Dompdf en Laravel 
laravel
 cursos-programación author_post  
José Luis Guisado 
 
Ayuda a mantener este blog activo Donar
En muchas ocasiones necesitamos que nuestra aplicación cuente con la funcionalidad de generar pdf o la exportación de excel, como puede ser en el caso de una factura. Para esta funcionalidad utilizamos librerías que nos facilitan la generación de pdf con funcionalidades para su desarrollo y diseño, pero muchas de estas librerías son muy tediosas.

Dompdf es un paquete muy sencillo para generar PDF en Laravel, creado por barryvdh, que nos permite crear a partir de un documento HTML un documento PDF con pocas líneas de código y además hacer uso del motor de plantilla blade para la impresión de datos de forma dinámica.

Instalación de Dompdf en laravel
 

Descargamos mediante composer el paquete DOMPDF

composer require barryvdh/laravel-dompdf
Una vez hecho esto, debemos añadir el ServiceProvider en el archivo app.php, que se encuentra en config/app.php:

Barryvdh\DomPDF\ServiceProvider::class,
Después, para llamar a la clase de una forma más rápida, podemos añadir esta línea de codigo en el apartado de facades, de esta forma llamaremos a la clase con el nombre "PDF":

'PDF' => Barryvdh\DomPDF\Facade::class,
Tras añadir este par de líneas, ya podemos hacer uso de Dompdf para generar nuestros propios PDF.

Creando la plantilla de nuestro PDF
 

Para comenzar, crearemos una vista llamada “ejemplo”  que se generará como PDF:

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
        h1{
        text-align: center;
        text-transform: uppercase;
        }
        .contenido{
        font-size: 20px;
        }
        #primero{
        background-color: #ccc;
        }
        #segundo{
        color:#44a359;
        }
        #tercero{
        text-decoration:line-through;
        }
    </style>
    </head>
    <body>
        <h1>Titulo de prueba</h1>
        <hr>
        <div class="contenido">
            <p id="primero">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nihil illo odit aperiam alias rem voluptatem odio maiores doloribus facere recusandae suscipit animi quod voluptatibus, laudantium obcaecati quisquam minus modi.</p>
            <p id="segundo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nihil illo odit aperiam alias rem voluptatem odio maiores doloribus facere recusandae suscipit animi quod voluptatibus, laudantium obcaecati quisquam minus modi.</p>
            <p id="tercero">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nihil illo odit aperiam alias rem voluptatem odio maiores doloribus facere recusandae suscipit animi quod voluptatibus, laudantium obcaecati quisquam minus modi.</p>
        </div>
    </body>
</html>