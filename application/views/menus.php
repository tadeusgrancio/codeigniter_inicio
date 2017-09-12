<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistema - Destine Já</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/sb-admin.css'); ?>" rel="stylesheet">


</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" >
        <div style="position: fixed;margin-top:-27px;">   
            <img src="<?php echo base_url('assets/img/destineja.png'); ?>" width="150px" height="60px"></img> 
        </div>
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarResponsive">

        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Painel de Gestão" >
                <a class="nav-link" href="<?php echo base_url('index.php/painel'); ?>">
                    <i class="fa fa-bar-chart"></i>
                    <span class="nav-link-text">
                        Painel de Gestão</span>
                </a>
            </li>

            <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Empresas / Pessoas" >
                <a class="nav-link" href="<?php echo base_url('index.php/empresas_pessoas'); ?>">
                    <i class="fa fa-address-card-o"></i>
                    <span class="nav-link-text">
                        Empresas / Pessoas</span>
                </a>
            </li>

            <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Demandas">
                <a class="nav-link" href="#">
                    <i class="fa fa-truck"></i>
                    <span class="nav-link-text">
                        Demandas</span>
                </a>
            </li>

            <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Usuários">
                <a class="nav-link" href="#">
                    <i class="fa fa-user"></i>
                    <span class="nav-link-text">
                        Usuários</span>
                </a>
            </li>


        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>
                    Logout</a>
            </li>
        </ul>
    </div>
</nav>



<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/popper/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo base_url('assets/js/sb-admin.min.js'); ?>"></script>

<script>

                $(document).ready(function () {
                    $('li').click(function () {
                        $(this).closest('ul').find('li').removeClass('active');
                        $(this).addClass('active');
                    });
                });
</script>    