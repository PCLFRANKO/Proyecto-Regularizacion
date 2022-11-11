<?php session_start();
$host = $_SERVER['HTTP_HOST'];
if ($_SESSION['Tipo'] != 'Capturista') header("location: http://$host/Proyecto-Regularizacion/admin.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="src/img/Logo-1-icono.ico">
    <link href="src/css/index.css?v1.1" type="text/css" rel="stylesheet">
    <link href="src/css/estatus.css?v1.1" type="text/css" rel="stylesheet">
    <title>Estatus de documentos</title>
</head>

<body>
    <header class="p-3 text-bg-light">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
                    <img alt="" src="src/img/Logo 2.png" class="bi" width="63" height="65" role="img">
                </a>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 w-25" role="search">
                    <div class="input-group ml">
                        <span class="material-icons input-group-text">&#xe8b6;</span>
                        <input type="search" class="form-control text-bg-light" placeholder="Buscar...">
                    </div>
                </form>
                <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                </div>


                <div class="d-flex">
                    <span class="material-icons icono">&#xe853;</span>
                    <h6 class="mt-2"><?php if (isset($_SESSION['Usuario'])) {
                                            echo $_SESSION['Usuario'];
                                        } else {
                                            $_SESSION['mensaje'] = "Necesitas iniciar sesión...";
                                            $_SESSION['color'] = 'danger';
                                            $_SESSION['destroy'] = true;
                                            $host = $_SERVER['HTTP_HOST'];
                                            header("location: http://$host/Proyecto-Regularizacion/login.php");
                                        } ?></h6>
                </div>

                <nav class="navbar bg-light border-2" aria-label="Light offcanvas navbar">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarLight" aria-labelledby="offcanvasNavbarLightLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLightLabel">Mi cuenta</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Configuración</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-danger" href="src/php/logout.php">Cerrar Sesión</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </header>

    <!-- Submenu -->
    <div class="text-center bs">
        <div class="row w-100">
            <a class="col text-decoration-none link p-2 borde" href="index.php">
                Principal
            </a>
            <a class="col text-decoration-none link p-2 borde" href="" data-bs-toggle="modal" data-bs-target="#modalBusqueda">
                Búsqueda Avanzada
            </a>
            <a class="col text-decoration-none link p-2" href="estatus.php">
                Estatus de documentos
            </a>
        </div>
    </div>


    <div class="contenido mt-4 d-flex">
        <div class="text-center folios w-50">
            <table class="table table-light table-hover" id="tabla-folio">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">FOLIO</th>
                        <th scope="col">Estatus General</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="folio">
                        <th scope="row" >IH123</th>
                        <td>
                            <p class="badge text-bg-danger" style="font-size: 14px;">No empezado</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">IH124</th>
                        <td>
                            <p class="badge text-bg-success" style="font-size: 14px;">Completado</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">IH124</th>
                        <td>
                            <p class="badge text-bg-success" style="font-size: 14px;">Completado</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">IH124</th>
                        <td>
                            <p class="badge text-bg-success" style="font-size: 14px;">Completado</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">IH124</th>
                        <td>
                            <p class="badge text-bg-success" style="font-size: 14px;">Completado</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">IH124</th>
                        <td>
                            <p class="badge text-bg-success" style="font-size: 14px;">Completado</p>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="estatus mx-5 mt-3 rounded-4 overflow-auto">
            <div class="header-estatus text-center mb-3">
                <h5 class="fw-bold">Folio: IH123</h5>
            </div>
            <div class="body-estatus">
                <table class="table mb-4">
                    <thead>
                        <h5 class="text-center fw-bold">Proceso 1: Solicitud de regularización</h5>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Solicitud</th>
                            <td>
                                <span class="material-icons rojo">&#xe5c9;</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Escritutas</th>
                            <td>
                                <span class="material-icons rojo">&#xe5c9;</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Identificación</th>
                            <td>
                                <span class="material-icons rojo">&#xe5c9;</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Historial Catastral</th>
                            <td>
                                <span class="material-icons rojo">&#xe5c9;</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Resolución idicial</th>
                            <td>
                                <span class="material-icons rojo">&#xe5c9;</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Certificación de hechos</th>
                            <td>
                                <span class="material-icons rojo">&#xe5c9;</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Foto aerea</th>
                            <td>
                                <span class="material-icons rojo">&#xe5c9;</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Oficio</th>
                            <td>
                                <span class="material-icons rojo">&#xe5c9;</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <thead>
                        <h5 class="text-center fw-bold">Proceso 2: Presentación de documento a la
                        COMUR</h5>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Oficio</th>
                            <td>
                                <span class="material-icons rojo">&#xe5c9;</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Solicitud de la regularización</th>
                            <td>
                                <span class="material-icons rojo">&#xe5c9;</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Estudio de análisis</th>
                            <td>
                                <span class="material-icons rojo">&#xe5c9;</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Acta de comur</th>
                            <td>
                                <span class="material-icons rojo">&#xe5c9;</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Oficio de regreso</th>
                            <td>
                                <span class="material-icons rojo">&#xe5c9;</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br>
    <br>
    

  
    <div class="d-flex flex-column h-100 text-bg-light">
        <!-- FOOTER -->
        <footer class="w-100 py-4 flex-shrink-0">
            <div class="container py-3">
                <div class="row gy-4 gx-5">
                    <div class="col-lg-4 col-md-6">
                        <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
                            <img alt="" src="src/img/Logo 1.png" class="bi" width="66" height="80" role="img">
                        </a>
                        <p class="text-muted">Ayuntamiento de Tonalá</p>
                        <p class="text-muted">&copy; Copyrights. Todos los derechos reservados.</p>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h5 class="text-black mb-3">Direccion</h5>
                        <p class="small text-muted">Calle Pino Suarez NO.32, Tonalá Centro C.P. 45400, Tonalá, Jalisco.</p>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h5 class="text-black mb-3">Redes</h5>
                        <ul class="list-unstyled text-muted">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="black" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="iconos">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="black" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="iconos">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="black" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-black mb-3">Contacto</h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="#" class="text-decoration-none">Tel. 33-35-86-60-00</a></li>
                            <li><a href="#" class="text-decoration-none">www.tonalá.gob.mx</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        const menuMas = document.querySelector(".folio")
        const menu_A_revelar = document.querySelector(".estatus")

        menuMas.addEventListener("click", (e) => {
            e.preventDefault()

            menu_A_revelar.classList.toggle("show")
        })
    </script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>