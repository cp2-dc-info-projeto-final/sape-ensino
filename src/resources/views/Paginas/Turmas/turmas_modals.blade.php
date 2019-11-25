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