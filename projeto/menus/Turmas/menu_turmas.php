
<!-- Modal para apagar escola -->
<div class="modal fade" id="apagarescola" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Apagar Escola</h5>
			</div>


			<div class="modal-body"><!-- corpo do modal -->
			<?php 
			$eid = $_GET['eid'];	
			echo '<form class="form-signin" method="post" action="Turmas/excluirescolas.php?eid='.$eid.'">';
			?>
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
	<!-- Insere a Sidebar -->
	<?php include('mostrarSidebar.php')?>
	

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
				//Verifica se é para mostrar o mural ou as turmas
				require_once('../funcphp/conexaoBD.php');
				if(isset($_GET['show'])){
				$banco = connect_BD();
				if(isset($_GET['eid'])){
					$idescola = $_GET['eid'];
				}
				// Seleciona as turmas daquela escola
				$query = "SELECT id, nome from turmas WHERE escola_id = ?";
				$stmt = $banco->prepare($query);
				$stmt->bind_param('i', $idescola);
				$stmt->execute();
				$result = $stmt->get_result();
			
				// Imprime as turmas na tela
				while($row = $result->fetch_assoc()){
				echo '<div class="card mb-3 col-12 col-sm-5 m-sm-3 col-lg-3 m-lg-4">
						<div class="card-body">
						<h3 class="card-title text-center"  style="white-space:nowrap;">'.$row['nome'].'</h3>
						<div class="card-footer bg-white">
						<a class="text-decoration-none" href="#"><button class="btn btn-primary btn-block bt-2">Entrar</button></a>
						</div>
							</div>
				</div>';
				}
			
				$banco->close();
			} else {
				include('mural.php');
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