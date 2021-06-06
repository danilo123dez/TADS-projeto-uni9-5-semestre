<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->getTitle(); ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/assets/plugins/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/plugins/adminlte/dist/css/adminlte.min.css">

    <!-- Required Datatable -->
    <link rel="stylesheet" href="/assets/plugins/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/plugins/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/plugins/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <?php
    $css = $this->getCss();
    if (!empty($css)) {
        foreach ($css as $val) {

            ?>
            <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/<?php echo $val ?>.css">
            <?php
        }
    }
    ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <h4 class="brand-text font-weight-light"> FastSystem </h4>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block"><?= $_SESSION['user']; ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link">
                            <i class="fab fa-product-hunt"></i>
                            <p>
                                Produtos
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/painelpedidos/novoproduto" class="nav-link <?= $this->getTitlePage() === 'Novo Produto' ? 'active' : ''; ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Cadastrar Produto</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/painelpedidos/produtos" class="nav-link <?= $this->getTitlePage() === 'Produtos' ? 'active' : ''; ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Listar Produtos</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/painelpedidos/pedidos" class="nav-link <?= $this->getTitlePage() === 'Pedidos' ? 'active' : ''; ?>">
                            <i class="fas fa-sort"></i>
                            <p>
                                Pedidos
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><?= $this->getTitlePage(); ?></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><?= $this->getTitlePage(); ?></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <?php $this->loadViewInTemplate($viewName, $viewData); ?>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; <?= date('Y') ?> FastSystem</strong> Todos os direitos preservados.
    </footer>

    <!-- REQUIRED SCRIPTS -->

    <script src="/assets/plugins/adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="/assets/plugins/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/plugins/adminlte/dist/js/adminlte.min.js"></script>

    <!-- Datatable Required -->
    <script src="/assets/plugins/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/plugins/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/plugins/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/assets/plugins/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/plugins/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/assets/plugins/adminlte/plugins/jszip/jszip.min.js"></script>
    <script src="/assets/plugins/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/assets/plugins/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/assets/plugins/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/assets/plugins/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/assets/plugins/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <?php
    $js = $this->getJs();
    if (!empty($js)) {
        foreach ($js as $val) {

            ?>
            <script src="<?php BASE_URL; ?>/assets/js/<?php echo $val ?>.js"></script>
            <?php
        }
    }
    ?>
</body>
</html>