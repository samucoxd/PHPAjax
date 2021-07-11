<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="description" />
    <meta name="keywords" content="keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="https://pronostico-erv.org.bo/frontend/img/favicon.ico" />
    <title>CPERv - Pronostico </title>
    <!-- styles-->
    <link rel="stylesheet" href="https://pronostico-erv.org.bo/frontend/css/styles.min.css" />
    <!-- web-font loader-->
    <script>
        WebFontConfig = {
            google: {
                families: ['Heebo:100,400,500,700,900'],
            }
        }

        function font() {
            var wf = document.createElement('script');

            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        }
        font()
    </script>

    <!-- CDN BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CDN JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>

<body>

    <div class="page-wrapper">
        <!-- mobile-menu start-->
        <div class="mobile-nav">
            <div class="nav-inner">
                <div class="nav-item">
                    <!-- main menu start-->
                    <nav class="menu-holder">
                        <ul class="mobile-menu">
                            <li class="menu-item active"><a href="/"><span>Inicio</span></a>
                            </li>
                            <li class="menu-item menu-item--has-child"><a
                                    href="javascript:void(0);"><span>Proyectos</span> </a>
                                <!-- sub-menu start-->
                                <ul class="sub-menu">
                                    <li><a href="https://pronostico-erv.org.bo/proyectos/solar">Solares
                                            fotovoltaicos</a></li>
                                    <li><a href="https://pronostico-erv.org.bo/proyectos/eolico">Eólicos</a></li>
                                </ul>
                                <!-- sub-menu end-->
                            </li>
                            <li class="menu-item  active"><a
                                    href="https://pronostico-erv.org.bo/pronostico"><span>Sistema de
                                        Pronóstico</span></a></li>
                            <li class="menu-item "><a href="https://pronostico-erv.org.bo/atlas"><span>Atlas eólico y
                                        solar</span></a></li>
                            <li class="menu-item  menu-item--has-child"><a
                                    href="javascript:void(0);"><span>Nosotros</span></a>
                                <!-- sub-menu start-->
                                <ul class="sub-menu">
                                    <li><a href="https://pronostico-erv.org.bo/nosotros/peerr">Programa PEERR</a></li>
                                    <li><a href="https://pronostico-erv.org.bo/nosotros/cperv">CPERv</a></li>

                                </ul>
                                <!-- sub-menu end-->
                            </li>
                            <li class="menu-item"><a
                                    href="https://pronostico-erv.org.bo/contacto"><span>Contacto</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- mobile-menu end-->
        <!-- header start-->

        <header class="header header--style-1" id="header">
            <div class="top-bar">
                <a href="/"><span><img src="https://pronostico-erv.org.bo/frontend/img/hogar.png"
                            alt="Inicio">&nbsp;INICIO</span></a>&nbsp;
                <a href="https://pronostico-erv.org.bo/contacto"><span><img
                            src="https://pronostico-erv.org.bo/frontend/img/correo.png"
                            alt="Contacto">&nbsp;CONTACTO</span></a>
            </div>
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 column">

                        <!-- logo block start-->
                        <div class="logo-block">
                            <a class="logo" href="https://www.giz.de/en/worldwide/389.html" target="new">
                                <img src="https://pronostico-erv.org.bo/frontend/img/top_giz.jpg" alt="GIZ">
                            </a>
                            <a class="logo" href="/">
                                <img src="https://pronostico-erv.org.bo/frontend/img/top_cperv.jpg" alt="CPERv">
                            </a>
                        </div>
                        <!-- logo block end-->

                        <!-- menu block start-->
                        <div class="menu-block">

                            <!-- main menu start-->
                            <nav class="menu-holder">
                                <ul class="main-menu">
                                    <li class="menu-item  menu-item--has-child"><a
                                            href="javascript:void(0);"><span>Proyectos</span> </a>
                                        <!-- sub-menu start-->
                                        <ul class="sub-menu">
                                            <li><a href="https://pronostico-erv.org.bo/proyectos/solar">Solares
                                                    fotovoltaicos</a></li>
                                            <li><a href="https://pronostico-erv.org.bo/proyectos/eolico">Eólicos</a>
                                            </li>
                                        </ul>
                                        <!-- sub-menu end-->
                                    </li>
                                    <li class="menu-item  active"><a
                                            href="https://pronostico-erv.org.bo/pronostico"><span>Sistema de
                                                Pronóstico</span></a></li>
                                    <li class="menu-item "><a href="https://pronostico-erv.org.bo/atlas"><span>Atlas
                                                eólico y solar</span></a>
                                    </li>
                                    <li class="menu-item  menu-item--has-child">
                                        <a href="javascript:void(0);"><span>Nosotros</span></a>
                                        <!-- sub-menu start-->
                                        <ul class="sub-menu">
                                            <li><a href="https://pronostico-erv.org.bo/nosotros/peerr">Programa
                                                    PEERR</a></li>
                                            <li><a href="https://pronostico-erv.org.bo/nosotros/cperv">CPERv</a></li>
                                        </ul>
                                        <!-- sub-menu end-->
                                    </li>
                                </ul>
                            </nav>
                            <!-- main menu end-->
                        </div>
                        <!-- menu block end-->

                        <!-- lang block start-->
                        <div class="lang-block">
                            <!-- menu-trigger start-->
                            <div class="hamburger">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                            <!-- menu-trigger end-->
                        </div>
                        <!-- lang block end-->
                    </div>
                </div>
            </div>
        </header>
        <!-- header end-->
        <main class="main">
            <section class="promo-primary">
                <div class="overlay"></div>
                <picture>
                    <source srcset="/frontend/img/Foto-7.jpg" media="(min-width: 992px)"><img class="img-bg"
                        src="/frontend/img/Foto-7.jpg" alt="img">
                </picture>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="align-container">
                                <div class="align-item"><span>fwfdsfsdfsd</span>
                                    <h1 class="title">dfssdfds</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- promo primary end-->
            <!-- about welcome start-->


            <!-- INICIO CONTENIDO TABLAS  -->

            <div class="container mt-5">
                <div class="row">
                    <div class="col-3 mx-auto">
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option value="1">Basico</option>
                            <option value="2">Avanzado</option>
                        </select>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        <div class="avanzado">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option value="1">Proyecto 1</option>
                                <option value="2">Proyecto 2</option>
                            </select>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option value="1">Empresa 1</option>
                                <option value="2">Empresa 1</option>
                            </select>
                        </div>

                        <button class="btn btn-primary">Mostrar</button>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Termoelectrica</th>
                                    <th scope="col">Hidroelectrica</th>
                                    <th scope="col">Eolica</th>
                                    <th scope="col">Soalr</th>
                                    <th scope="col">Biomasa</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12 mx-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Empresa</th>
                                    <th scope="col">Tipo Energia</th>
                                    <th scope="col">Generacion Total</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Termoelectrica</th>
                                    <th scope="col">Hidroelectrica</th>
                                    <th scope="col">Eolica</th>
                                    <th scope="col">Soalr</th>
                                    <th scope="col">Biomasa</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-6">
                        <div>
                            <canvas id="myChart">

                            </canvas>
                        </div>
                </div>
                <div class="row mt-5">
                    <div class="col-6">
                        <div>
                            <canvas id="myChart2">

                            </canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FIN CONTENIDO TABLAS -->
            <!-- brands end-->
        </main>
        <!-- footer start-->
        <footer class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <!-- logo start-->
                            <div class="footer-logo">
                                <a class="logo" href="/">
                                    <img src="https://pronostico-erv.org.bo/frontend/img/iso.gif" width="162"
                                        height="80">
                                    <h4 class="title" style="margin-top: 29px;margin-left: 10px;">CPERv</h4>
                                </a>
                            </div>
                            <!-- logo end-->
                            <!-- footer contacts start-->
                            <div class="footer-contacts">
                                <p><strong>Centro de Pronóstico de Energías Renovables variables</strong></p>
                                <p class="address">Programa de Energías Renovables y Eficiencia Energética (PEERR)<br>
                                    Deutsche Gesellschaft für Internationale Zusammenarbeit (GIZ) GmbH<br>
                                    Av. Sánchez Bustamante N° 504, entre calles 11 y 12, Calacoto.<br>
                                    Casilla 11400<br>
                                    La Paz, Bolivia
                                </p>
                                <p class="phone-number">T +591 2 2119499 interno 217</p>
                                <p class="e-main">E <a
                                        href="mailto:contacto@pronostico-erv.org">contacto@pronostico-erv.org</a></p>
                            </div>
                            <!-- footer contacts end-->
                        </div>
                        <div class="col-lg-5 offset-lg-0 col-md-7 offset-md-1" style="margin-top: 25px;">
                            <h4 class="title">Enlaces de interés</h4>
                            <!-- footer nav start-->
                            <nav class="footer-nav">
                                <ul class="footer-menu">
                                    <li><a href="https://www.mhe.gob.bo/" target="new">Ministerio de Hidrocarburos y
                                            Energías</a></li>
                                    <li><a href="https://www.giz.de/en/worldwide/389.html" target="new">GIZ</a></li>
                                    <li><a href="https://www.ende.bo/index.php" target="new">ENDE Corporación</a></li>
                                    <li><a href="https://energypedia.info/wiki/Renewable_Energies_in_Bolivia"
                                            target="new">Energypedia</a></li>
                                    <li><a href="http://www.endecorani.bo/" target="new">ENDE Corani S.A.</a></li>
                                    <li><a href="https://www.bivica.org/" target="new">BIVICA</a></li>
                                    <li><a href="https://guaracachi.com.bo/" target="new">ENDE Guaracachi S.A.</a></li>
                                    <li>&nbsp;</li>
                                    <li><a href="https://www.cndc.bo/home/index.php" target="new">CNDC</a></li>
                                    <li><a href="https://www.umsa.bo/" target="new">UMSA</a></li>
                                    <li><a href="https://www.aetn.gob.bo/web/" target="new">AETN</a></li>
                                    <li><a href="http://iideproq.umsa.bo/" target="new">IIDEPROQ</a></li>
                                </ul>
                            </nav>
                            <!-- footer nav end-->
                        </div>
                        <div class="col-md-4 d-lg-none">
                            <!-- socials start-->
                            <nav class="socials-holder socials-tablet">
                                <ul class="socials-primary">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </nav>
                            <!-- socials end -->
                        </div>
                        <div class="col-lg-2 offset-lg-0 col-md-7 offset-md-1" style="margin-top:35px;">
                            <!-- footer subscribe start-->
                            <div class="footer-subscribe" style="text-align:center">
                                <img src="https://pronostico-erv.org.bo/frontend/img/bolivia-mapa.png" alt="Bolivia">
                            </div>
                            <!-- footer subscribe end-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-lower">
                            <div class="row align-items-baseline">
                                <div class="col-lg-4 col-md-6">
                                    <p class="copyright">© 2020 enbolivia.com</p>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <!-- privacy start-->
                                    <div class="privacy-block"><a href="https://pronostico-erv.org.bo/datos">Protección
                                            de datos <span class="separator">|</span> </a><a
                                            href="https://pronostico-erv.org.bo/impressum">Impressum</a>
                                    </div>
                                    <!-- privacy end-->
                                </div>
                                <div class="col-lg-4 col-md-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->
    </div>
    <!-- libs-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://pronostico-erv.org.bo/frontend/js/libs.min.js"></script>
    <!-- scripts-->
    <script src="https://pronostico-erv.org.bo/frontend/js/common.min.js"></script>
    <!-- JQUERY -->
    <script type="text/javascript">
        function fetch_select(val) {
            $.ajax({
                type: 'post',
                url: 'index.php',
                data: {
                    get_option: val
                },
                success: function (response) {
                    document.getElementById("new_select").innerHTML = response;
                }
            });
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const labels = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
        ];
        const data = {
            labels: labels,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45],
            }]
        };
        const config = {
            type: 'bar',
            data,
            options: {}
        };

        var myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>

    <script>
        const labels = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
        ];
        console.log(labels);
        const data = {
            labels: labels,
            datasets: [{
                label: 'My First Dataset',
                data: [65, 59, 80, 81, 56, 55, 40],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };
        const config = {
            type: 'bar',
            data: data,
            options: {},
        };
        var myChart2 = new Chart(
            document.getElementById('myChart2'),
            config
        );
    </script>

</body>

</html>