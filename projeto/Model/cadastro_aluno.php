<?php
  session_start();
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Cadastro de Aluno</title> 

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>

  <script src="../js/feather.min.js"></script>

</head>
<!-- FIM DO HEAD-->

<body style="
background-image: url(../images/back.png);
background-attachment: fixed;
background-repeat: no-repeat;
margin: 0%;
width:auto;
height: 100%;">

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h1 class="card-title text-center">Cadastro</h1>
            <?php include('../View/system_message.php'); ?>
            <form class="form-signin" method="post" action="../Control/cadastro.php">
                <div class="form-label-group mb-3">
                  <label for="nome_cad">Seu Nome</label>
                  <div class="input-group">
                    <div class="input-group-pretend">
                      <span class="input-group-text"><i data-feather="user"></i></span>
                    </div>
                    <input class="form-control" id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Nome Completo"/>
                  </div>
                </div>

                <div class="form-label-group mb-3">
                  <label for="email_cad">Seu E-mail</label>
                  <div class="input-group">
                    <div class="input-group-pretend">
                      <span class="input-group-text"><i data-feather="mail"></i></span>
                    </div>
                    <input class="form-control" id="email_cad" name="email_cad" required="required" type="email" placeholder="ex. contato@dominio.com"/>
                  </div>
                </div>
                
                <div class="form-label-group mb-3">
                    <label for="matri_cad">Sua Matricula</label>
                    <div class="input-group">
                      <div class="input-group-pretend">
                        <span class="input-group-text"><i data-feather="file-text"></i></span>
                      </div>
                      <input class="form-control" id="matri_cad" name="matri_cad" required="required" type="text" placeholder="ex. m2397523"/>
                    </div>
                </div>

                <div class="form-label-group mb-3">
                    <label for="senha_cad">Sua Senha</label>
                    <div class="input-group">
                      <div class="input-group-pretend">
                        <span class="input-group-text"><i data-feather="key"></i></span>
                      </div>
                    <input class="form-control" id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 12345678"/>
                  </div>
                </div>

                <div class="form-label-group mb-3">
                    <label for="consenha_cad">Confirme Sua Senha</label>
                    <div class="input-group">
                      <div class="input-group-pretend">
                        <span class="input-group-text"><i data-feather="key"></i></span>
                      </div>
                      <input class="form-control" id="consenha_cad" name="consenha_cad" required="required" type="password" placeholder="ex. 12345678"/>
                    </div>
                  </div>
            
              <button class="btn btn-lg btn-primary btn-block" type="submit" value="Cadastrar-se">Cadastrar-se</button>
          </div>
          <div class="card-body " style="background-color:#e6e6e6">
            </form>
            <p class="font-weight-bold text-center ">Já tem uma conta?</p>
            <a class="text-decoration-none" href="login.php"><button class="btn btn-outline-secondary btn-block">Ir para o Login</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="../js/jquery-3.4.1.min.js" ></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>