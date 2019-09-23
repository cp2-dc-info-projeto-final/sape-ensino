<nav class="col-md-3 col-lg-2 d-fixed d-md-block bg-light sidebar collapse " id="collapsesidebar">
		<div class="sidebar-sticky scrollbar scrollbar-pink bordered-pink thin ">
			<ul class="nav flex-column mr-3">
				<h4 class="text-center text-secondary my-2">Painel</h4>

				<?php
				// Passa um parametro na url para mostrar as turmas
				$id = $_GET['eid'];
				$enome = $_GET['escolanome'];
				echo '<a class="text-decoration-none btn btn-outline-primary btn-block my-2" href="../menus/menu_include.php?url=turmas&eid='.$id.'&escolanome='.$enome.'&show=yes">Suas Turmas</a>';
				?>
					
				<button class="btn btn-outline-primary btn-block my-2" data-toggle="collapse" data-target="#CollapseSidebar">Configurações</button>
					<div class="collapse bg-light p-2" id ="CollapseSidebar">
						<a class="btn btn-danger btn-block font-weight-bold text-white" data-toggle="modal" data-target="#apagarescola">Apagar escola</a>
					</div>
				
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