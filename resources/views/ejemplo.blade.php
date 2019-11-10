
Generar pdf con Dompdf en Laravel 
laravel
 cursos-programaci�n author_post  
Jos� Luis Guisado 
 
Ayuda a mantener este blog activo Donar
En muchas ocasiones necesitamos que nuestra aplicaci�n cuente con la funcionalidad de generar pdf o la exportaci�n de excel, como puede ser en el caso de una factura. Para esta funcionalidad utilizamos librer�as que nos facilitan la generaci�n de pdf con funcionalidades para su desarrollo y dise�o, pero muchas de estas librer�as son muy tediosas.

Dompdf es un paquete muy sencillo para generar PDF en Laravel, creado por barryvdh, que nos permite crear a partir de un documento HTML un documento PDF con pocas l�neas de c�digo y adem�s hacer uso del motor de plantilla blade para la impresi�n de datos de forma din�mica.

Instalaci�n de Dompdf en laravel
 

Descargamos mediante composer el paquete DOMPDF

composer require barryvdh/laravel-dompdf
Una vez hecho esto, debemos a�adir el ServiceProvider en el archivo app.php, que se encuentra en config/app.php:

Barryvdh\DomPDF\ServiceProvider::class,
Despu�s, para llamar a la clase de una forma m�s r�pida, podemos a�adir esta l�nea de codigo en el apartado de facades, de esta forma llamaremos a la clase con el nombre "PDF":

'PDF' => Barryvdh\DomPDF\Facade::class,
Tras a�adir este par de l�neas, ya podemos hacer uso de Dompdf para generar nuestros propios PDF.

Creando la plantilla de nuestro PDF
 

Para comenzar, crearemos una vista llamada �ejemplo�  que se generar� como PDF:

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