<!DOCTYPE html>
<?php 
include '/gerateJson.php';

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema | Requerimento</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--BootstrapTable-->
        <link rel="stylesheet" href="BootstrapTable/css/bootstrap-table.css" />

        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

        <!--Tema Style-->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

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
            

            @media print {
                #pModal {
                    
                    display: none;
                }
            }
        </style>

        <script>
            
              
              
            window.actionEvents = {
                'click .view': function (e, value, row, index) {
                    //alert('You click like icon, row: ' + JSON.stringify(row));
                    alert(index);
                    console.log(value, row, index);
                    
                },
                'click .edit': function (e, value, row, index) {
                    alert('You click edit icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);
                    carregaModal(value,'e');

                },
                'click .print': function (e, value, row, index) {
                    alert('You click remove icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);
                    carregaModal(value,'p');

                },
                'click .hist': function (e, value, row, index) {
                    alert('You click remove icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);
                    carregaModal(value,'h');
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
                    '<a class="view" href="javascript:void(0)" title="Visualizar" data-toggle="modal" data-target="#myModalview">',
                    '<i class="glyphicon glyphicon-eye-open"></i>',
                    '</a>',
                    '<a class="edit ml10" href="javascript:void(0)" title="Responder" data-toggle="modal" data-target="#myModaledit">',
                    '<i class="glyphicon glyphicon-pencil"></i>',
                    '</a>',
                    '<a class="print ml10" id="test" href="javascript:void(0)" title="Imprimir" data-toggle="modal" data-target="#myModalprint" >',
                    '<i class="glyphicon glyphicon-print"></i>',
                    '</a>',
                    '<a class="hist ml10" href="javascript:void(0)" title="Histórico" data-toggle="modal" data-target="#myModalhist">',
                    '<i class="glyphicon glyphicon-share"></i>',
                    '</a>'
                ].join('');






            }
            
          
            
            window.onload = function () {
                $('#table').bootstrapTable('resetView');
            };



        </script>

        <script>
            function actionFormatter2(value, row, index) {

                $('#tableModal').bootstrapTable('resetView');
                return [
                    '<a class="view" href="javascript:void(0)" title="Visualizar">',
                    '<i class="glyphicon glyphicon-eye-open"></i>',
                    '</a>',
                    '<a class="edit ml10" href="javascript:void(0)" title="Responder">',
                    '<i class="glyphicon glyphicon-pencil"></i>',
                    '</a>',
                    '<a class="print ml10" id="test" href="javascript:void(0)" title="Imprimir" >',
                    '<i class="glyphicon glyphicon-print"></i>',
                    '</a>'
                ].join('');

            }
        </script>


    </head>

    <body class="skin-blue">

        <script src="jquery/jquery-ui.min.js" type="text/javascript"></script>
        <script src="jquery/jquery.min.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js"></script>
        <script src="BootstrapTable/js/bootstrap-table.js"></script>



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
                        <small>Requerimentos Novos</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-home"></i> Início</a></li>
                        <li><a href="reqTodos.php"> Requerimentos</a></li>
                        <li><a href=""> Novos</a></li>
                        <!--<li class="active">Dashboard</li>-->
                    </ol>
                </section>




                <!-- Main content -->
                <section class="content">
                    
                    <div class="table-responsive">
                    <div id="pModal">

                        <table id="table" data-toggle="table"
                               data-height="518"
                               
                               data-url= 'BootstrapTable/dados/dataNovos.php'
                               data-url= 'BootstrapTable/dados/dataNovos.php'data-click-to-select="true"
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
                        <!-- Modal -->

                    </div>
                        </div>
                </section>



                <section class="content">

                    <!-- Modal -->
                    <div class="modal fade" id="myModalhist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <br> <h4 class="modal-title" id="myModalLabel">Requerimento <small>(Histórico)</small></h4>
                                </div>
                                <div class="modal-body">

                                    <table id="tableModal" data-toggle="table"
                                           data-height="518"
                                           data-url="BootstrapTable/dados/dataTodos.json"
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

                                                <th data-field="id">id</th>
                                                <th data-field="name">Name</th>
                                                <th data-field="price">Price</th>
                                                <th data-field="action" data-formatter="actionFormatter2" data-events="actionEvents">Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!--<div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>-->
                            </div>
                        </div>

                    </div>

                    <div class="modal fade" id="myModalview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Requerimento <small>(Visualizar)</small></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="nav-tabs-custom">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab_4" data-toggle="tab">Dados</a></li>
                                            <li><a href="#tab_5" data-toggle="tab">Aluno</a></li>
                                            <li><a href="#tab_6" data-toggle="tab">Resposta</a></li>
                                            
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_4">
                                               <div class="box box-solid">
                                                    <div class="box-header">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                        <h3 class="box-title">Requerimento com Quebra <small></small></h3>
                                                    </div><!-- /.box-header -->
                                                    <div class="box-body">
                                                        <dl class="dl-horizontal">
                                                            <dt>Nome:</dt>
                                                            <dd>Nil Martins de Moura</dd>
                                                            <dt>Período:</dt>
                                                            <dd>6º</dd>
                                                            <dt>Matrícula:</dt>
                                                            <dd>Cáculo 4</dd>
                                                            <br>
                                                            <div class="box-header">
                                                                <i class="glyphicon glyphicon-cog"></i>
                                                                <h3 class="box-title">Quebras</h3>
                                                            </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <dl>
                                                                    <dt>Física 3</dt>
                                                                    <dd>--------------------------------</dd>
                                                                    <dt>Cáculo 2</dt>
                                                                    <dd>--------------------------------</dd>
                                                                    <dt>Álgebra Linear</dt>
                                                                    <dd>--------------------------------</dd>
                                                                </dl>
                                                            </div><!-- /.box-body -->

                                                            <div class="box-header">
                                                                <i class="glyphicon glyphicon-edit"></i>
                                                                <h3 class="box-title">Descrição</h3>
                                                            </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <dl>

                                                                    ------------------------------------

                                                                    ------------------------------------

                                                                    ------------------------------------<br>

                                                                    ------------------------------------

                                                                    ------------------------------------

                                                                    ------------------------------------<br>

                                                                    ------------------------------------

                                                                    ------------------------------------

                                                                    ------------------------------------<br>

                                                                    ------------------------------------

                                                                    ------------------------------------

                                                                    ------------------------------------

                                                                </dl>
                                                            </div><!-- /.box-body -->

                                                        </dl>
                                                    </div><!-- /.box-body -->
                                                </div><!-- /.box -->
                                            </div><!-- /.tab-pane -->
                                            <div class="tab-pane" id="tab_5">
                                               <div class="box box-solid">
                                                    <div class="box-header">
                                                        <h3 class="box-title">Situação do Aluno<small> ( Disciplinas ) </small></h3>
                                                    </div><!-- /.box-header -->
                                                    <div class="box-body">
                                                        <div class="box-group" id="accordion">
                                                            <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                                            <div class="panel box box-primary">
                                                                <div class="box-header">
                                                                    <h4 class="box-title">
                                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                                            Física <small>3</small>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapseOne" class="panel-collapse collapse">
                                                                    <div class="box-body">
                                                                        ------------------------------------------------------------------------<br>
                                                                        ------------------------------------------------------------------------
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel box box-danger">
                                                                <div class="box-header">
                                                                    <h4 class="box-title">
                                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                            Cáculo <small>2</small>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapseTwo" class="panel-collapse collapse">
                                                                    <div class="box-body">
                                                                        ------------------------------------------------------------------------<br>
                                                                        ------------------------------------------------------------------------
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel box box-success">
                                                                <div class="box-header">
                                                                    <h4 class="box-title">
                                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                                            Álgebra Linear
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapseThree" class="panel-collapse collapse">
                                                                    <div class="box-body">
                                                                        ------------------------------------------------------------------------<br>
                                                                        ------------------------------------------------------------------------ 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.box-body -->
                                                </div><!-- /.box -->
                                            </div><!-- /.tab-pane -->
                                            <div class="tab-pane" id="tab_6">
                                                 <div class="box box-solid">
                                                    <div class="box-header">
                                                        <h3 class="box-title">Requerimento<small> ( Novo ) </small></h3>
                                                    </div><!-- /.box-header -->
                                                    <div class="box-body">
                                                       O requerimento ainda não foi respondido!
                                                    </div><!-- /.box-body -->
                                                </div><!-- /.box -->
                                            </div><!-- /.tab-pane -->
                                            
                                    </div><!-- nav-tabs-custom -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                    <div class="modal fade" id="myModaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Requerimento <small></small></h4>
                                </div>
                                <div class="modal-body">


                                    <!-- Custom Tabs -->
                                    <div class="nav-tabs-custom">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab_1" data-toggle="tab">Dados</a></li>
                                            <li><a href="#tab_2" data-toggle="tab">Aluno</a></li>
                                            <li><a href="#tab_3" data-toggle="tab">Resposta</a></li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                    Ação <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Deferir</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Indeferir</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Pendências</a></li>
                                                    <!--<li role="presentation" class="divider"></li>
                                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>-->
                                                </ul>
                                            </li>

                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1">
                                                <div class="box box-solid">
                                                    <div class="box-header">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                        <h3 class="box-title">Requerimento com Quebra <small>(Responder)</small></h3>
                                                    </div><!-- /.box-header -->
                                                    <div class="box-body">
                                                        <dl class="dl-horizontal">
                                                            <dt>Nome:</dt>
                                                            <dd>Nil Martins de Moura</dd>
                                                            <dt>Período:</dt>
                                                            <dd>6º</dd>
                                                            <dt>Matrícula:</dt>
                                                            <dd>Cáculo 4</dd>
                                                            <br>
                                                            <div class="box-header">
                                                                <i class="glyphicon glyphicon-cog"></i>
                                                                <h3 class="box-title">Quebras</h3>
                                                            </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <dl>
                                                                    <dt>Física 3</dt>
                                                                    <dd>--------------------------------</dd>
                                                                    <dt>Cáculo 2</dt>
                                                                    <dd>--------------------------------</dd>
                                                                    <dt>Álgebra Linear</dt>
                                                                    <dd>--------------------------------</dd>
                                                                </dl>
                                                            </div><!-- /.box-body -->

                                                            <div class="box-header">
                                                                <i class="glyphicon glyphicon-edit"></i>
                                                                <h3 class="box-title">Descrição</h3>
                                                            </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <dl>

                                                                    ------------------------------------

                                                                    ------------------------------------

                                                                    ------------------------------------<br>

                                                                    ------------------------------------

                                                                    ------------------------------------

                                                                    ------------------------------------<br>

                                                                    ------------------------------------

                                                                    ------------------------------------

                                                                    ------------------------------------<br>

                                                                    ------------------------------------

                                                                    ------------------------------------

                                                                    ------------------------------------

                                                                </dl>
                                                            </div><!-- /.box-body -->

                                                        </dl>
                                                    </div><!-- /.box-body -->
                                                </div><!-- /.box -->
                                            </div><!-- /.tab-pane -->
                                            <div class="tab-pane" id="tab_2">
                                                <div class="box box-solid">
                                                    <div class="box-header">
                                                        <h3 class="box-title">Situação do Aluno<small> ( Disciplinas ) </small></h3>
                                                    </div><!-- /.box-header -->
                                                    <div class="box-body">
                                                        <div class="box-group" id="accordion">
                                                            <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                                            <div class="panel box box-primary">
                                                                <div class="box-header">
                                                                    <h4 class="box-title">
                                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                                            Física <small>3</small>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapseOne" class="panel-collapse collapse">
                                                                    <div class="box-body">
                                                                        ------------------------------------------------------------------------<br>
                                                                        ------------------------------------------------------------------------
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel box box-danger">
                                                                <div class="box-header">
                                                                    <h4 class="box-title">
                                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                            Cáculo <small>2</small>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapseTwo" class="panel-collapse collapse">
                                                                    <div class="box-body">
                                                                        ------------------------------------------------------------------------<br>
                                                                        ------------------------------------------------------------------------
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel box box-success">
                                                                <div class="box-header">
                                                                    <h4 class="box-title">
                                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                                            Álgebra Linear
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapseThree" class="panel-collapse collapse">
                                                                    <div class="box-body">
                                                                        ------------------------------------------------------------------------<br>
                                                                        ------------------------------------------------------------------------ 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.box-body -->
                                                </div><!-- /.box -->

                                            </div><!-- /.box-body -->

                                            <div class="tab-pane" id="tab_3">
                                                <div class="box box-primary">
                                                    <div class="box-header">
                                                        <h3 class="box-title">Observações<small> ( ! ) </small></h3>
                                                        <div class="pull-right box-tools">
                                                            <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>

                                                        </div><!-- /. tools -->
                                                    </div><!-- /.box-header -->
                                                    <div class="box-body">

                                                        <div class='box-body pad'>
                                                            <form>
                                                                <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                                            </form>
                                                        </div>

                                                    </div><!-- /.box-body -->
                                                </div><!-- /.box -->

                                            </div><!-- /.box-body -->
                                        </div><!-- /.tab-pane -->
                                    </div><!-- /.tab-content -->
                                </div><!-- modal-bdy -->
                            </div>

                        </div>
                    </div>



                    <div class="modal fade bs-example-modal-lg" id="myModalprint" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div id="pModal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
                                    <h4 class="modal-title" id="myModalLabel">Requerimento <small>(Imprimir)</small></h4>
                                </div>
                                <div class="modal-body">
                                    
                                      CRIAR O TEMPLATE DO REQUERIMENTO

                                      <div id="pModal"> 
                                          <!--<button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>-->
                                          <button class="btn btn-success pull-right"onclick="window.print()"><i class="fa fa-print"></i> Imprimir</button>
                                          <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Gerar PDF</button>
                                      </div>
                                      <br><br>
                                </div>
                                               
                            </div>
                        </div>
                    </div>

                </section>


            </aside> <!-- /.right-side -->
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

            $(function () {
                $('#test').click(function () {

                    $('#table').bootstrapTable('resetView');
                });
            });


            //$('#myModal').modal('show')
            /*
             $(function () {
             $('#table').ready(function () {
             
             $('#table').bootstrapTable('resetView');
             });
             });*/

        </script>


<!--<script src="jquery/jquery.min.js"></script>
<script src="Bootstrap/js/bootstrap.min.js" type="text/javascript"></script>-->



        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) 
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>-->

        <!-- AdminLTE for demo purposes -->
       <!-- <script src="js/AdminLTE/demo.js" type="text/javascript"></script>-->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function () {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                //CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>

    </body>
</html>
