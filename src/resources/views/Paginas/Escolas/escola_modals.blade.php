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
</div><!-- fim do modal para entrar na escola -->

<div class="modal fade" id="ModalEscola" tabindex="-1" role="dialog"> <!-- Modal de cadastro de escola -->
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
					<form class="form-signin" method="post" action="{{route('criaturma')}}">
						{{ csrf_field() }}
						<div class="form-label-group mb-3"> 
							<label for="NomeTurma">Nome da Turma</label>
							<div class="input-group">
								<div class="input-group-pretend">
									<span class="input-group-text"><i data-feather="file-text"></i></span>
								</div>
								<input class="form-control" maxlength=10 id="nometurma" name="nome" required="required" type="text" placeholder="1306"/>
							</div>
						</div>
						@isset($eid)
							<input type="hidden" name="escola_id" value="{{$eid}}">
						@endisset
						<button class="btn btn-lg btn-primary btn-block" type="submit" value="CriarTurma">Criar Turma</button>
					</form>
				</div><!--fim do corpo -->

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div><!-- fim do modal para criar uma turma -->


@isset($eid)
	<!-- Modal para criar uma Turma -->
<div class="modal fade" id="ModalPublicar" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Criar Aviso</h5>
				</div>

				<div class="modal-body"><!-- corpo do modal da escola -->
					<form class="form-signin" method="post" action="{{route('newpost', ['eid' => $eid])}}">
						{{ csrf_field() }}
						<div class="form-label-group mb-3"> 
							<label for="titulo">Título</label>
							<input class="form-control"  id="titulopub" name="titulopub"  required="required" type="text" placeholder="Título da Publicação"/>
						</div>
						<div class="form-label-group mb-3"> 
							<label for="titulo">Texto</label>
							<textarea class="row form-control ml-1 col-12" id="textopub" name="textopub" rows="15" style="resize: none" placeholder="Conteúdo do Aviso" ></textarea>
						</div>

						<div class="form-label-group mb-3"> 
							<label for="anexos">Anexos</label>
							<div class="border rounded p-3 mt-2">
									<div class="row ml-2 mx-auto">
										<h4><span class="badge badge-primary mx-1">Arquivos.pdf</span></h4>
										<h4><span class="badge badge-primary mx-1">Arquivos.pdf</span></h4>
									</div>
							</div>
						</div>
						
						<div class="row ml-1 col-12 ">
							<button class="btn btn-lg btn-primary btn-block col-5 ml-auto mt-2"  type="file"><i data-feather="paperclip" class="m-1"></i>Anexar</button>
							<button class="btn btn-lg btn-primary btn-block col-5 mx-auto" type="submit"><i data-feather="send" class="m-1"></i>Enviar</button>
						</div>
					</form>
				</div><!--fim do corpo -->

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div><!-- fim do modal para criar uma turma -->
@endisset

