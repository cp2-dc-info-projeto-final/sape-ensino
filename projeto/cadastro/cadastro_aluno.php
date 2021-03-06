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

<!-- style para imagem de fundo responsiva -->
<body style="
background-image: url(../images/back.png);
background-attachment: fixed;
background-repeat: no-repeat;
margin: 0%;
width:auto;
height: 100%;">

  <div class="container"> <!--centralização do conteudo -->
    <div class="row"> <!--alinhado horizontalmente -->
      <div class="col-12 col-md-7 col-lg-5 mx-auto"> <!-- responsividade do tamanho do card dependendo do tamanho da tela-->

        <!-- inicio do codigo do card de cadastro -->
        <div class="card card-signin my-5"> 
          <div class="card-body"> <!--todo conteudo do card-->
            <h1 class="card-title text-center">Cadastro</h1>
            <?php include('../funcphp/system_message.php'); ?> <!-- php para o sistema de mensagens de erro e de casdatro concluido com sucesso -->
            
            <!--Inicio do formulario-->
            <form class="form-signin" method="post" action="cadastro.php">
                <div class="form-label-group mb-3">
                  <label for="nome_cad">Seu Nome</label>
                  <div class="input-group"><!--div para unir a caixa de input com o item do data-feather-->
                    <div class="input-group-pretend"><!-- para tornar uma parte da caixa de input-->
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
                
            </form>
          </div><!-- fim da primeira parte do card-body-->
          <div class="card-body " style="background-color:#e6e6e6">
            
            <p class="font-weight-bold text-center ">Já tem uma conta?</p>
            <a class="text-decoration-none" href="../login/login.php"><button class="btn btn-outline-secondary btn-block">Ir para o Login</button></a>
          </div>
          
        </div> <!--fim de todo o card-->
      </div> <!--fim da div de responsividade do tamado do card-->
    </div> <!-- fim da row-->
  </div> <!--fim do container-->
  
    <script src="../js/jquery-3.4.1.min.js" ></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>