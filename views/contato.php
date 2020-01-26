<?php

    //Validação de versão de browser
    include("../libraries/compatibilidade.php");
    require_once("../config/db.php");
?>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>daab - Vamos Conversar?</title>

        <links>
            <link rel="stylesheet" href="../css/bootstrap.min.css">
            <link rel="stylesheet" href="../css/main.css">
            <link rel="stylesheet" href="../css/mine.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
            <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        </links>

    </head>
    <body>

        <!--Cabeçalho-->
        <header id="header" class="fixed">
    
            <!--Formulario de login-->
            <div id="login" class="frmLogin">
                <form method="post" action="index.php">
                    <label for="login_input_username">Login</label>
                    <input id="login_input_username" class="login_input" type="text" name="user_name" placeholder="Email" required />
                    <input id="login_input_password" class="login_input" type="password" name="user_password" placeholder="Senha" autocomplete="off" required />
                    <input type="submit"  name="login" value="Ok" />
                </form>
            </div>

            <!--Menu-->
            <div class="header-content clearfix"> 
                <a class="logo" href="#"><img src="../images/logo.png" alt=""></a>
                    <nav class="navigation" role="navigation">
                        <ul class="primary-nav">
                            <li><a href="../index.php">Quem Somos</a></li>
                            <li><a href="../services">Serviços</a></li>
                            <li><a href="faleconosco.php">Fale Conosco</a></li>
                            <!--<li><a href="#works">Produtos</a></li>-->
                            <!--<li><a href="#teams">Our Team</a></li>-->
                            <!--<li><a href="#testimonials">Testimonials</a></li>-->
                        </ul>
                    </nav>
                <a href="#" class="nav-toggle">Menu<span></span></a> 
            </div>
        </header><!--Fim cabeçalho--> 

        <div id="form-content" class="row ">
            <div id="form-title"class="col-lg-12">
              <h2>Fale Conosco</h2>
              <form  id="contato" action="../libraries/enviaEmail.php" method="post">
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="assunto">Assunto</label>
                          <input type="text" id="assunto" name="assunto" class="form-control form-control-lg">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12 form-group">
                          <label for="mensagem">Mensagem</label>
                          <textarea id="mensagem" name="mensagem" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-12">
                          <input type="submit" name="submit" value="Enviar Email" class="btn btn-primary py-3 px-5">
                      </div>
                  </div>
        </div>

    </body>
</html>
