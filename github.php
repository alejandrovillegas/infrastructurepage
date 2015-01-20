<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GitHub</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">


</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                        S4DS
                    </a>
                </li>
                <li>
                    <a href="index.php">Infraestructura</a>
                </li>
                <li>
                    <a href="database.php">Bases de datos</a>
                </li>
                <li>
                    <a href="estabilizacion.php">Estabilizacion</a>
                </li>
                <li>
                    <a href="contabilidad.php">Contabilidad</a>
                </li>
                <li>
                    <a href="test.php">Test</a>
                </li>
                <li>
                    <a href="war.php">Generar War</a>
                </li>
                <li>
                    <a href="javaback.php">JavaMelody Back</a>
                </li>
                <li>
                    <a href="javabacknew.php">JavaMelody Backnew</a>
                </li>
                <li>
                    <a href="https://www.leftronic.com/share/jpPCzZ/#jpPCzZ" target = "container">Github</a>
                </li>

            </ul>
        </div
        
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Github</h1>
                        <p>Sitio para realizar procesos de infraestructura.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Ocultar Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        <iframe id="container" name="container"  style="width:100%; height:800px; border:none" src="https://www.leftronic.com/share/jpPCzZ/#jpPCzZ"></iframe>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
