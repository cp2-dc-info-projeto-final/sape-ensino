<?php session_start(); ?>
<!DOCTYPE html>
<head>

  <title>Login</title> 

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css"/>

  <script src="../../js/feather.min.js"></script>
</head>
<!-- FIM DO HEAD-->

<body style="
background-image: url(../../images/back.png);
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
            <h1 class="card-title text-center">Login</h1>
            <?php //include('../funcphp/system_message.php'); ?>
            <form class="form-signin" method="post" action="LogControl.php">
              <div class="form-label-group mb-3"> 
                <label for="matricula">Sua Matrícula</label>
                  <div class="input-group">
                      <div class="input-group-pretend">
                        <span class="input-group-text"><i data-feather="user"></i></span>
                      </div>
                    <input class="form-control" id="matricula" name="matricula" required="required" type="text" placeholder="M12345678"/>
                  </div>
              </div>    
              <div class="form-label-group mb-3">
                  <label for="senha">Sua Senha</label>
                  <div class="input-group">
                    <div class="input-group-pretend">
                      <span class="input-group-text"><i data-feather="key"></i></span>
                    </div>
                  <input class="form-control" id="senha" name="senha" required="required" type="password" placeholder="ex. 12345678"/>
                  </div>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit" value="Logar">Logar-se</button>
            </form>
          </div>
          <div class="card-body " style="background-color:#e6e6e6">
            <p class="font-weight-bold text-center ">Ainda não se cadastrou?</p>
            <a class="text-decoration-none" href="../Cadastro/CadView.php?url=docente"><button class="btn btn-outline-secondary col-5 mr-1 ml-3">Docente</button></a>
            <a class="text-decoration-none" href="../Cadastro/CadView.php?url=aluno"><button class="btn btn-outline-secondary col-5 ml-3">Aluno</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="../../js/jquery-3.4.1.min.js" ></script>
    <script src="../../js/bootstrap.min.js"></script>
    
    <script>
      feather.replace();
    </script>
</body>
</html>