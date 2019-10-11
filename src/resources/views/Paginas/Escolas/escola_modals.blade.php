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
