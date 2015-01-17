<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema | Requerimento</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->
        <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="TelaLogin/login.css" rel="stylesheet" type="text/css" />
         <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css"/>
       
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
            <div class="logo">
                CEFET-MG
            </div>
 
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
               
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        
                        <!-- Notifications: style can be found in dropdown.less -->
                        
                        <!-- Tasks: style can be found in dropdown.less -->
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-log-in"></i>
                                <span>Entrar <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                               	<div class="modal-header">

                                    <h4 class="modal-title" id="myModalLabel">Entrar</h4>
                                </div> <!-- /.modal-header -->


                                <form role="form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="uLogin" placeholder="ID">
                                            <label for="uLogin" class="input-group-addon glyphicon glyphicon-user"></label>
                                        </div>
                                    </div> <!-- /.form-group -->

                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="uPassword" placeholder="Senha">
                                            <label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
                                        </div> <!-- /.input-group -->
                                    </div> <!-- /.form-group -->

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Lembre-me
                                        </label>
                                    </div> <!-- /.checkbox -->
                                </form>



                                <div class="modal-footer">
                                    <button class="form-control btn btn-primary">Ok</button>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="100" style="width: 0%;">
                                            <span class="sr-only">progress</span>
                                        </div>
                                    </div>
                                </div> <!-- /.modal-footer -->	
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
         <section class="content">
             <div class="container" style="margin-top:40px">
                 <div class="row">
                     <div class="col-sm-6 col-md-4 col-md-offset-4">
                         <div class="panel panel-default">
                             <div class="panel-heading">
                                 <strong> <h4>Sistema de Requerimento</h4></strong>
                             </div>
                             <div class="panel-body">
                                 <form role="form" action="#" method="POST">
                                     <fieldset>
                                         <div class="row">
                                             <div class="center-block">
                                                 <img class="profile-img"
                                                      src="img/avatar5.png" alt="">
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                                 <div class="form-group">
                                                     <div class="input-group">
                                                         <span class="input-group-addon">
                                                             <i class="glyphicon glyphicon-user"></i>
                                                         </span> 
                                                         <input class="form-control" placeholder="ID" name="loginname" type="text" autofocus>
                                                     </div>
                                                 </div>
                                                 <div class="form-group">
                                                     <div class="input-group">
                                                         <span class="input-group-addon">
                                                             <i class="glyphicon glyphicon-lock"></i>
                                                         </span>
                                                         <input class="form-control" placeholder="Senha" name="password" type="password" value="">
                                                     </div>
                                                 </div>
                                                 <div class="form-group">
                                                     <input type="submit" class="btn btn-lg btn-primary btn-block" value="Entrar">
                                                 </div>
                                             </div>
                                         </div>
                                     </fieldset>
                                 </form>
                             </div>
                             <div class="panel-footer ">
                                 Criar uma conta? <a href="#" onClick=""> Clique aqui </a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         
         <div class="panel-footer">#</div>
         
        <script src="jquery/jquery.min.js"></script>
        <script src="TelaLogin/login.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <!--<script src="js/AdminLTE/demo.js" type="text/javascript"></script>-->
		
       
    </body>
</html>
