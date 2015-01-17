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
    <body class="skin-blue wysihtml5-supported  pace-done fixed">
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
                        
                    </ul>
                </div>
            </nav>
        </header>
        
         <section class="content">
             <br><br><br><br>
             <div class="box box-primary">
                 <div>
                     <br><br>
                     <div class="row text-center">
                         
                         <h2><i class="glyphicon glyphicon-edit"></i> Registrar</h2>
                         
                     </div>
                     <div>
                         <label for="firstname" class="col-md-2">
                             Nome:
                         </label>
                         <div class="col-md-9">
                             <input type="text" class="form-control" id="firstname" placeholder="Digite o Primeiro Nome">
                         </div>
                         <div class="col-md-1">
                             <i class="fa fa-lock fa-2x"></i>
                         </div>
                     </div> 
                     <br> <br> <br>    
                     <div>
                         <label for="lastname" class="col-md-2">
                             Sobrenome:
                         </label>
                         <div class="col-md-9">
                             <input type="text" class="form-control" id="lastname" placeholder="Digite o Sobrenome">
                         </div>
                         <div class="col-md-1">
                             <i class="fa fa-lock fa-2x"></i>
                         </div>
                     </div>
                     
                     <div>
                         <br> <br> <br> 
                         <label for="emailaddress" class="col-md-2">
                             Email:
                         </label>
                         <div class="col-md-9">
                             <input type="email" class="form-control" id="emailaddress" placeholder="Digite o Endereço de Email">
                             <p class="help-block">
                                 Exemplo: yourname@domain.com
                             </p>
                         </div>

                        
                         <div class="col-md-1">
                             <i class="fa fa-lock fa-2x"></i>
                         </div>
                     </div>
                      <br> <br> <br> 
                      <div>
                         <label for="firstname" class="col-md-2">
                             Nº Matrícula:
                         </label>
                         <div class="col-md-9">
                             <input type="text" class="form-control" id="firstname" placeholder="Entre com o Nº de Matrícula">
                         </div>
                         <div class="col-md-1">
                             <i class="fa fa-lock fa-2x"></i>
                         </div>
                     </div> 
                     
                      <br> <br> <br><br>
                     <div>
                         <label for="password" class="col-md-2">
                             Senha:
                         </label>
                         <div class="col-md-9">
                             <input type="password" class="form-control" id="password" placeholder="Digite a Senha">
                             <p class="help-block">
                                 Min: 8 caracteres
                             </p>
                         </div>
                         <div class="col-md-1">
                             <i class="fa fa-lock fa-2x"></i>
                         </div>
                     </div>
                     <div>
                         <label for="sex" class="col-md-2">
                             Sexo:
                         </label>
                         <div class="col-md-10">
                             <label class="radio">
                                 <input type="radio" name="sex" id="sex" value="male" checked="">
                                 Masculino
                             </label>
                             <label class="radio">
                                 <input type="radio" name="sex" id="Radio1" value="female">
                                 Feminino
                             </label>
                         </div>             
                     </div>

                     <br> <br> <br> 

                     <div>
                         <label for="country" class="col-md-2">
                             Período:
                         </label>
                         <div class="col-md-9">
                             <select name="country" id="country" class="form-control">
                                 <option>--Selecione--</option>
                                 <option>1º</option>
                                 <option>2º</option>
                                 <option>3º</option>
                                 <option>4º</option>
                                 <option>5º</option>
                                 <option>6º</option>
                                 <option>7º</option>
                                 <option>8º</option>
                                 <option>9º</option>
                                 <option>10º</option>
                             </select>
                         </div>            
                     </div>
                     <br> <br> <br><br> <br> <br><br>
                     <div>
                         <label for="uploadimage" class="col-md-2">
                             Upload Image:
                         </label>
                         
                         
                         <div class="col-md-10">
                             <input type="file" class="btn btn-file" name="uploadimage" id="uploadimage">
                             <p class="help-block">
                                 Formatos Aceitos: jpeg, jpg, gif, png
                             </p>
                         </div>          
                     </div>
                     <br> <br><br><br>
                     <div>
                         <div class="col-md-2">
                         </div>
                         <div class="col-md-10">
                             <label>
                                 <input type="checkbox">  Eu aceito os termos e as codições de uso. </label>
                         </div>            
                     </div>
                     <div class="row">
                         <div class="col-md-2">
                         </div>
                         <div class="span3 offset2">
                             <div class="col-md-10 col-md-offset-5">
                                 
                                     <br>
                                     
                                     <button type="submit" class="btn btn-success">
                                         Registrar
                                     </button>
                                
                             </div>
                         </div>
                     </div>
                      <br><br>
                 </div>
             </div>
         </section>
        
         <div class="panel-footer">#decidir o melhor form</div>
         
        <script src="jquery/jquery.min.js"></script>
        <script src="TelaLogin/login.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <!--<script src="js/AdminLTE/demo.js" type="text/javascript"></script>-->
		
       
    </body>
</html>

