 <!--Modal para apagar uma Turma -->
 <div class="modal fade" id="ModalApagarTurma" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h5 class="modal-title text-danger">Você apagará toda a turma e seu Conteúdo!</h5>
				</div>
                <div class="modal-body"><!-- corpo do modal da escola -->
					<form class="form-signin" method="post" action="#">
						{{ csrf_field() }}
						<button class="btn btn-lg btn-danger btn-block" type="submit" value="ApagarTurma">Deletar Turma Permanentemente</button>
					</form>
				</div><!--fim do corpo -->

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
    </div>

    <!-- fim do modal de apagar uma turma -->


	<!-- Modal para criar uma Materia -->
<div class="modal fade" id="ModalCriarMateria" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Cadastro de uma Matéria</h5>
				</div>

				<div class="modal-body"><!-- corpo do modal da escola -->
					<form class="form-signin" method="post" action="">
						{{ csrf_field() }}
						<div class="form-label-group mb-3"> 
							<label for="NomeMateria">Nome da Matéria</label>
							<div class="input-group">
								<div class="input-group-pretend">
									<span class="input-group-text"><i data-feather="file-text"></i></span>
								</div>
								<input class="form-control" maxlength=15 id="nomemateria" name="nome" required="required" type="text" placeholder="ex. Português"/>
							</div>
						</div>
						
						@isset($turmas->id)
							<input type="hidden" name="turma_id" value="{{$turmas->id}}">
						@endisset

						
						<button class="btn btn-lg btn-primary btn-block" type="submit" value="CriarMateria">Criar Matéria</button>
					</form>
				</div><!--fim do corpo -->

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div><!-- fim do modal para criar uma materia -->