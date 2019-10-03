@extends('Layouts.master_layout')

@section('modals')

    <!-- Modals -->

    

		<!-- Modal para entrar em uma escola --> 
		<div class="modal fade" id="ModalEntrarEscolaAluno" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Entrar em uma Escola</h5>
					</div>

					<div class="modal-body"><!-- corpo do modal -->
						<form class="form-signin" method="post" action="{{route('entrarEscola')}}">
							{{ csrf_field() }}
							<div class="form-label-group mb-3"> 
								<label for="CodEscola">Código da Escola</label>
								<div class="input-group">
									<div class="input-group-pretend">
										<span class="input-group-text"><i data-feather="key"></i></span>
									</div>
									<input class="form-control" maxlength=6 id="CodEscola" name="CodEscola" required="required" type="password" placeholder="EX. 123456"/>
								</div>
							</div>
							<button class="btn btn-lg btn-primary btn-block" type="submit" value="EntrarEscola">Entrar</button>
						</form>
					</div><!--fim do corpo -->
					<div class="modal-footer"> 
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div><!-- fim do modal para a escola -->


    	<!-- Modal para Criar uma escola -->
		<div class="modal fade" id="ModalEscola" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Cadastro de Escola</h5>
					</div>

					<div class="modal-body"><!-- corpo do modal da escola -->
						<form class="form-signin" method="post" action="{{route('regEscola')}}">
							{{ csrf_field() }}

							<div class="form-label-group mb-3"> 
								<label for="nome">Nome da Escola</label>
								<div class="input-group">
									<div class="input-group-pretend">
										<span class="input-group-text"><i data-feather="file-text"></i></span>
									</div>
									<input class="form-control" maxlength=10 id="nomeescola" name="nome" required="required" type="text" placeholder="CP2"/>
								</div>
							</div>    
							<div class="form-label-group mb-3">
								<label for="descricao">Descrição</label>
								<div class="input-group">
									<div class="input-group-pretend">
									<span class="input-group-text"><i data-feather="message-square"></i></span>
									</div>
								<textarea class="form-control" maxlength=38 id="descescola" name="descricao" required="required" placeholder="ex. Nome completo da Escola" rows="1"></textarea>
								</div>
							</div>
							<div class="form-label-group mb-3"> 
								<label for="password">Senha da Escola</label>
								<div class="input-group">
									<div class="input-group-pretend">
										<span class="input-group-text"><i data-feather="alert-circle"></i></span>
									</div>
									<input class="form-control" id="senhaescola" name="password" required="required" type="password" placeholder="EX. 12345678"/>
								</div>
							</div>
							<div class="form-label-group mb-3"> 
								<label for="password">Confirmar Senha</label>
								<div class="input-group">
									<div class="input-group-pretend">
										<span class="input-group-text"><i data-feather="alert-circle"></i></span>
									</div>
									<input class="form-control" id="senhaescola" name="password_confirmation" required="required" type="password" placeholder="EX. 12345678"/>
								</div>
							</div>
							<button class="btn btn-lg btn-primary btn-block" type="submit" value="CadastrarEscola">Cadastrar Escola</button>
						</form>
					</div><!--fim do corpo -->

					<div class="modal-footer"> 
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div><!-- fim do modal para a escola -->

		<!-- Modal para criar uma Turma -->
		<div class="modal fade" id="ModalTurma" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Cadastro da Turma</h5>
					</div>

					<div class="modal-body"><!-- corpo do modal da escola -->
						<form class="form-signin" method="post" action="Turmas/cadastroturma.php">
							{{ csrf_field() }}
							<div class="form-label-group mb-3"> 
								<label for="NomeTurma">Nome da Turma</label>
								<div class="input-group">
									<div class="input-group-pretend">
										<span class="input-group-text"><i data-feather="file-text"></i></span>
									</div>
									<input class="form-control" maxlength=10 id="nometurma" name="nometurma" required="required" type="text" placeholder="1306"/>
								</div>
							</div>    
							<div class="form-label-group mb-3">
                    			<label for="escola-turma">Escola</label>
                    			<div class="input-group">
                        			<div class="input-group-pretend">
                          				<span class="input-group-text"><i data-feather="briefcase"></i></span>
                        			</div>
                                    <select class="custom-select" id="escola-turma" name="escola-turma" required="required" placeholder="Selecione uma opção...">
										<option disable selected hidden>Selecione uma opção...</option>
										<?php 
										//include('selectescolas.php');
                            			//<option value=" "></option>
                            			//<option value=" "></option>
										//<option value=" "></option>
										?>
									</select>
                    			</div>
                			</div>
							<button class="btn btn-lg btn-primary btn-block" type="submit" value="CriarTurma">Criar Turma</button>
						</form>
					</div><!--fim do corpo -->

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div><!-- fim do modal para criar uma turma -->
		
		
                    <div arial-label="breadcrumb" class=" container mt-3"><!-- barra de diretório das paginas-->
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
        			</div><!-- fim da barra de diretório-->

@stop