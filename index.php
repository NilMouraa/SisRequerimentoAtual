<!DOCTYPE html>
<?php include './gerateJson.php';?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema | Requerimento</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->
        <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css"/>
        <!-- Morris charts -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
         <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                CEFET-MG
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button" id="toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        
                        <!-- Notifications: style can be found in dropdown.less -->
                        
                        <!-- Tasks: style can be found in dropdown.less -->
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Elder de Oliveira <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Elder de Oliveira - Coordenador
                                        <small>##Colocar algo aqui##</small>
                                    </p>
                                </li>
                               
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sair</a>
                                    </div>
                                    <!--<div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                    </div>-->
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Olá, Elder</p>

                            
                        </div>
                    </div>
                    <!-- search form -->
                    
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.php">
                                <i class="fa fa-home"></i> <span>Início</span>
                            </a>
                        </li>
                         
                        <li class="treeview">
                            <a href="">
                                <i class="fa fa-envelope"></i>
                                <span>Requerimentos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="reqNovos.php"><i class="fa fa-angle-double-right"></i> Novos 
                                        <small class="badge pull-right bg-red"><?= novosLable()  ?></small></a></li>
                                
                                <li><a href="reqPendentes.php"><i class="fa fa-angle-double-right"></i> Pendentes</a></li>
                                <li><a href="reqDeferidos.php"><i class="fa fa-angle-double-right"></i> Deferidos</a></li>
                                <li><a href="reqIndeferidos.php"><i class="fa fa-angle-double-right"></i> Indeferidos</a></li>
                                <li><a href="reqTodos.php"><i class="fa fa-angle-double-right"></i> Todos</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="treeview">
                            <a href="">
                                <i class="fa fa-user"></i>
                                <span>Alunos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="alunoEngComp.php"><i class="fa fa-angle-double-right"></i> Engenharia Computação</a></li>
                                
                            </ul>
                        </li>
                        
                        <li>
                            <a href="relatorio.php">
                                <i class="fa fa-bar-chart-o"></i> <span>Relatórios</span> <small class="badge pull-right bg-green">label2</small>
                            </a>
                        </li>
                       
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Coordenador
                        <small>Painel de Controle</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-home"></i> Início</a></li>
                        <!--<li class="active">Dashboard</li>-->
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-md-6">
                            <!-- AREA CHART -->
                            <div class="box box-primary">
                                <div class="box-header">
								<i class="fa fa-bar-chart-o"></i>
                                    <h3 class="box-title">Matrículas</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="chart" id="revenue-chart" style="height: 300px;"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <!-- DONUT CHART -->
                            <div class="box box-danger">
                                <div class="box-header">
								<i class="fa fa-bar-chart-o"></i>
                                    <h3 class="box-title">Requerimentos</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </div><!-- /.col (LEFT) -->
                        <div class="col-md-6">
                            <!-- LINE CHART---> 
                            <div class="box box-info">
                                <div class="box-header">
								<i class="fa fa-bar-chart-o"></i>
                                    <h3 class="box-title">Número de Quebras</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="chart" id="line-chart" style="height: 300px;"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <!-- BAR CHART -->
                            <div class="box box-success">
                                <div class="box-header">
								<i class="fa fa-bar-chart-o"></i>

                                    <h3 class="box-title">Quebras <small>(Disciplinas)</small></h3>
									
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="chart" id="bar-chart" style="height: 300px;"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </div><!-- /.col (RIGHT) -->
                    </div><!-- /.row -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <script src="jquery/jquery.min.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <!--<script src="js/AdminLTE/demo.js" type="text/javascript"></script>-->
		
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                "use strict";

                // AREA CHART
                var area = new Morris.Area({
                    element: 'revenue-chart',
                    resize: true,
                    xkey: 'y',
//                    data: [
//                        {y: '2011 Q1', item1: 30.5, item2: 22.5},
//                        {y: '2011 Q2', item1: 5, item2: 7},
//                        
//                        {y: '2012 Q1', item1: 20, item2: 5},
//                        {y: '2012 Q2', item1: 30, item2: 22},
//                       
//                        {y: '2013 Q1', item1: 1, item2: 21},
//                        {y: '2013 Q2', item1: 40, item2: 50}  ],
                   data:<?= gerateJsonArea()  ?>,                    
                    ykeys: ['item2','item1'],
                          
                    labels: ['Sem Quebra', 'Com Quebra'],
                    lineColors: ['#a0d0e0', '#f39c12'],
                    hideHover: 'auto'
                });

                // LINE CHART
                var line = new Morris.Line({
                    element: 'line-chart',
                    resize: true,
//                    data: [
//                        {y: '2011 Q1', item1: 4},
//                        {y: '2011 Q2', item1: 5},
//                        {y: '2012 Q1', item1: 2},
//                        {y: '2012 Q2', item1: 7},
//                        {y: '2013 Q1', item1: 9},
//                        {y: '2013 Q2', item1: 20}
//						
//						
//                    ],
                    data: <?= gerateJsonLine()  ?>,
                    xkey: 'y',
                    ykeys: ['item1'],
                    labels: ['Quant'],
                    lineColors: ['#3c8dbc'],
                    hideHover: 'auto'
                });

                //Requerimentos
                var donut = new Morris.Donut({
                    element: 'sales-chart',
                    resize: true,
                    colors: ["#3c8dbc", "#f56954", "#00a65a", "#f39c12"],
//                    data: [
//                        {label: "Novos", value: 12},
//                        {label: "Indeferidos", value: 30},
//                        {label: "Pendentes", value: 20},
//						{label: "Deferidos", value: 38}
//						
//                    ],
                    data: <?= gerateJsonDonut()  ?>,
                    hideHover: 'auto'
                });
                //Num maior de quebras
                var bar = new Morris.Bar({
                    element: 'bar-chart',
                    resize: true,
//                    data: [
////                        {y: '2006', a: 10, b: 9, c: 20, d: 12},
////                        {y: '2007', a: 15, b: 12, c: 10, d: 9},
////                        {y: '2008', a: 5, b: 31, c: 20, d: 9},
//                        {y: '2010', a: 7, b: 12, c: 9, d: 18},
//                        {y: '2011', a: 20, b: 10, c: 16, d: 17},
//                        {y: '2012', a: 15, b: 4, c: 20, d: 32},
//                        {y: '2013', a: 10, b: 22, c: 9, d: 18}
//                    ],
                    data: <?= gerateJsonBar()  ?>,
                    barColors: ['#00a65a', '#f56954', '#f39c12','#3c8dbc'],
                    xkey: 'y',
                    ykeys: ['a', 'b', 'c', 'd'],
//                    labels: ['CALC I','FIS II','FIS III','AL'],
                    //labels:[<?php echo("'CALC I'".","."'CALC II'".","."'CALC III'".","."'CALC IV'") ?>],
                    //labels:<?= returna_NameMirroBar() ?>,
                    labels: ['<?= returna_NameMirroBar(1) ?>','<?= returna_NameMirroBar(2) ?>','<?= returna_NameMirroBar(3) ?>','<?= returna_NameMirroBar(4) ?>'],
                    hideHover: 'auto'
                });
            });
        </script>

    </body>
</html>
