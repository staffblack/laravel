<html lang="es">

<head>

    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="node_modules/tether/dist/css/tether.min.css">
    <style>
        body {
            background-color: #ffffff;
        }
        
        #navs {
            background-color: #79b0ce;
            border-radius: 5px;
            display: flex;
            justify-content: center;
        }
        
        .navbar {
            padding: 0;
            display: flex;
            justify-content: space-around;
        }
        
        a {
            color: whitesmoke;
        }
        
        a:hover {
            color: whitesmoke;
        }
        
        .nav-item {
            transition: ease all 0.5s;
            padding-left: 12px;
            padding-right: 12px;
        }
        
        .nav-item:hover {
            transition: ease all 0.5s;
            background-color: #1f668d;
        }
        
        .nav-link {
            padding: 0;
            height: 50px;
            display: flex;
            align-items: center;
            font-size: 10pt;
        }
        
        @media screen and (max-width: 1060px) {
            .nav-link {
                font-size: 7pt;
                ;
            }
        }
        
        @media screen and (max-width: 991px) {
            .nav-link {
                font-size: 11pt;
                ;
            }
        }
        
        @keyframes animacionMenu {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <!--NAVBAR INICIO-->
    <section class="container p-4">
        <nav id="navs" class="navbar navbar-expand-lg bg-blue container mt-4 mb-4">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        
        <span class="navbar-toggler-icon">
            <img src="menu-ul.png" width="35px" height="auto" alt="">
        </span>
   
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inicio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown" id="ofAcademics">
                        <a class="nav-link dropdown-toggle" href="nuestro_colegio" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nuestro Colegio
                    </a>
                        <div id="ofAcdemic" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="resena_historica">Resena Historica</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="quienes_somos">Quienes Somos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" id="ofAcademics">
                        <a class="nav-link dropdown-toggle" href="nuestro_colegio" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            &nbsp;&nbsp;Oferta académica&nbsp;&nbsp;
                    </a>
                        <div id="ofAcdemic" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="seccion_matutina">Sección Matutina</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="seccion_vespertina">Sección Vespertina</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" id="comEdu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        &nbsp;&nbsp;Comunidad Educativa&nbsp;&nbsp;
                    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="comEduc">
                            <a class="dropdown-item" href="comunidad_educativa">Directivos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="comunidad_educativa_docentes">Docentes</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="comunidad_educativa">Administrativos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="comunidad_educativa_docentes?trabajador=Servicio">Servicio</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cronograma1">&nbsp;&nbsp;Cronograma&nbsp;&nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="notas_bloque">&nbsp;&nbsp;Notas de bloque&nbsp;&nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formularios1">&nbsp;&nbsp;Formularios&nbsp;&nbsp;</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--NAVBAR FIN-->

        </div>
        <!--ANIMACION JS-->
        <script src="js/nav.js"></script>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="node_modules/animejs/lib/anime.min.js"></script>
</body>

</html>