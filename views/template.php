<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/mvcPHP/views/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/mvcPHP/views/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <?php
            include '/laragon/www/mvcPHP/views/includes/navbar.php'
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
            include '/laragon/www/mvcPHP/views/includes/menu.php'
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <?php

                        if (isset($_GET['ruta'])) {
                            $ruta = $_GET['ruta'];

                            if ($ruta == 'users' ||
                                $ruta == 'products' ||
                                $ruta == 'categories'
                                ) {
                                include "/laragon/www/mvcPHP/views/modules/{$ruta}.php";
                            }else{
                                include "/laragon/www/mvcPHP/views/modules/404.php";
                            }
                        }

                    ?>
                    
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-<?= date(format:'Y') ?> <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="/mvcPHP/views/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/mvcPHP/views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/mvcPHP/views/dist/js/adminlte.min.js"></script>
</body>

</html>