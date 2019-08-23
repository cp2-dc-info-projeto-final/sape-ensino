
<!-- Modal para apagar escola -->
<div class="modal fade" id="apagarescola" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Apagar Escola</h5>
			</div>


			<div class="modal-body"><!-- corpo do modal -->
			<?php 
			$eid = $_GET['escolanome'];	
			echo '<form class="form-signin" method="post" action="Turmas/excluirescolas.php?eid='.$eid.'">';
			?>
				<!--<form class="form-signin" method="post" action="excluirescolas.php?eid=">-->
					<div class="form-label-group mb-3"> 
						<label for="NomeTurma">Senha da Escola</label>
						<div class="input-group">
							<div class="input-group-pretend">
								<span class="input-group-text"><i data-feather="alert-circle"></i></span>
							</div>
							<input class="form-control" id="senhae" name="senhae" required="required" type="password" placeholder="EX. 12345678"/>
						</div>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit" value="apagarescola">Apagar</button>
				</form>
			</div><!--fim do corpo -->
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>
	
	
	
	

<div class="row">
	<nav class="col-md-3 col-lg-2 d-fixed d-md-block bg-light sidebar collapse " id="collapsesidebar">
		<div class="sidebar-sticky scrollbar scrollbar-pink bordered-pink thin ">
			<ul class="nav flex-column mr-3">
				<h4 class="text-center text-secondary my-2">Painel</h4>
					
				<button class="btn btn-outline-primary btn-block my-2" data-toggle="collapse" data-target="#CollapseSidebar">Configurações</button>
					<div class="collapse bg-light p-2" id ="CollapseSidebar">
						<a class="btn btn-danger btn-block font-weight-bold text-white" data-toggle="modal" data-target="#apagarescola">Apagar escola</a>
					</div>

				<?php 
				echo '<a class="text-decoration-none btn btn-outline-primary btn-block my-2" href="../menus/menu_include.php?url=turmas&eid='.$_GET['eid'].'">Suas Turmas</a>';
				?>
				
				<div class="dropdown-divider"></div>

				<h4 class="text-center text-secondary my-2">Docentes</h4>

				<li class="row mx-auto ml-2">
					<p class="text-secondary ml-1"> Nome dos Professores</p>
				</li>

				<li class="row mx-auto ml-2">
					<p class="text-secondary ml-1"> Nome dos Professores</p>
				</li>

				<div class="dropdown-divider"></div>

				<h4 class="text-center text-secondary my-2">Alunos</h4>


				<li class="row mx-auto ml-2">
					<p class="text-secondary ml-1"> Nome dos Alunos</p>
				</li>
				<li class="row mx-auto ml-2">
					<p class="text-secondary ml-1"> Nome dos Alunos</p>
				</li>
			</ul>
		</div>
	</nav>
	

	<div class="container ml-sm-2 ml-lg-4 ml-xl-5"><!-- centralizaçao do conteúdo-->
		<nav arial-label="breadcrumb" class="mt-3 mx-auto"><!-- barra de diretório das paginas-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="menu_include.php">Home</a></li>
				<?php 
				if(isset($_GET['escolanome'])){
					$escolanome = $_GET['escolanome'];
					echo '<li class="breadcrumb-item active">'.$escolanome.'</li>'; 
				} else{
					echo '<li class="breadcrumb-item active">Undefined</li>';
				}
				?>
			</ol>
		</nav><!-- fim da barra de diretório-->


		
			
		<div class="row ml-md-2"><!--posiciona os cards horizontalmente-->
			
			<?php
				require_once('../funcphp/conexaoBD.php');
			
				if(isset($_GET['escolanome'])){ 
				$banco = connect_BD();
				if(isset($_GET['eid'])){
					$idescola = $_GET['eid'];
				}
				$query = "SELECT id, nome from turmas WHERE escola_id = ?";
				$stmt = $banco->prepare($query);
				$stmt->bind_param('i', $idescola);
				$stmt->execute();
				$result = $stmt->get_result();
			
				
				while($row = $result->fetch_assoc()){
				echo '<div class="card mb-3 col-12 col-sm-5 m-sm-3 col-lg-3 m-lg-4">';
						echo '<div class="card-body">
						<h3 class="card-tite text-center"  style="white-space:nowrap;">'.$row['nome'].'</h3>
						<div class="card-footer bg-white">
						<a class="text-decoration-none" href="#"><button class="btn btn-primary btn-block bt-2">Entrar</button></a>
						</div>
							</div>'; 
				echo '</div>';
				}
			
				$banco->close();
			}
				
			?>  <!-- Aqui fica o código de PHP para adicionar as turmas-->
			
		</div> 
	</div><!-- fim do alinhamento horizontal dos cards -->
</div>



    <!-- Bootstrap.js and jquer.js -->
    <script src="../js/jquery-3.4.1.min.js">
    </script>
    <script src="../js/bootstrap.min.js">
	</script>
	<script>
      feather.replace()
    </script>