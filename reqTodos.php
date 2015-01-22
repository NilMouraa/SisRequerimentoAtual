<!DOCTYPE html>
<?php include './gerateJson.php';?>
<html>
    <head>

        <!--<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="BootstrapTable/css/bootstrap-table.css">
        <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <meta charset="UTF-8">
        <title>Sistema | Requerimento</title>

        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <style>
            .ml10 {
                margin-left: 10px;
            }
        </style>

        <script>
            window.actionEvents = {
                'click .like': function (e, value, row, index) {
                    alert('You click like icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);
                },
                'click .edit': function (e, value, row, index) {
                    alert('You click edit icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);
                },
                'click .remove': function (e, value, row, index) {
                    alert('You click remove icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);
                }
            };

            function queryParams() {

                return {
                    type: 'owner',
                    sort: 'updated',
                    direction: 'desc',
                    per_page: 100,
                    page: 1
                };

            }

            function actionFormatter(value, row, index) {

                return [
                    '<a class="like" href="javascript:void(0)" title="Visualizar">',
                    '<i class="glyphicon glyphicon-eye-open"></i>',
                    '</a>',
                    '<a class="edit ml10" href="javascript:void(0)" title="Responder">',
                    '<i class="glyphicon glyphicon-pencil"></i>',
                    '</a>',
                    '<a class="remove ml10" href="javascript:void(0)" title="Imprimir">',
                    '<i class="glyphicon glyphicon-print"></i>',
                    '</a>',
                    '<a class="remove ml10" href="javascript:void(0)" title="Histórico">',
                    '<i class="glyphicon glyphicon-share"></i>',
                    '</a>'
                ].join('');


            }
            window.onload = function () {
                $('#table').bootstrapTable('resetView');
            };


        </script>



    </head>

    <body class="skin-blue">

        <script src="jquery/jquery-ui.min.js" type="text/javascript"></script>
        <script src="jquery/jquery.min.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js"></script>
        <script src="BootstrapTable/js/bootstrap-table.js"></script>

        <script src="jquery.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <script src="bootstrap-table.js"></script>		


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

                        <li class="treeview active">
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
                        <small>Requerimentos</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-home"></i> Início</a></li>
                        <li><a href=""> Requerimentos</a></li>
                        <li><a href=""> Todos</a></li>
                        <!--<li class="active">Dashboard</li>-->
                    </ol>
                </section>




                <!-- Main content -->
                <section class="content">

                    <table id="table" data-toggle="table"
                           data-height="518"
                           data-url="BootstrapTable/dados/dataTodos.php"
                           data-click-to-select="true"
                           data-pagination="true"
                           data-query-params="queryParams"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="true"
                           data-show-columns="true"
                           >

                        <thead>
                            <tr>

                                    <th data-field="nome">Nome</th>
                                    <th data-field="periodo">Período</th>
                                    <th data-field="situacao">Situação</th>
                                    <th data-field="action" data-formatter="actionFormatter" data-events="actionEvents">Ações</th>
                            </tr>
                        </thead>
                    </table>

                </section>


            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

        <script>

   $(function () {


       $('#toggle').click(function () {
           $('#table').bootstrapTable('resetView');
       });

   });



   $(function () {


       $('#btoggle').click(function () {
           $('#table').bootstrapTable('resetView');
       });

   });




        </script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>

    </body>
</html>
