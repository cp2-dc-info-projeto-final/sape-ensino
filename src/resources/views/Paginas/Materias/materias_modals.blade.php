@isset($materias->id)
	<!-- Modal para criar um aviso -->
<div class="modal fade" id="ModalPublicar2" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Criar Aviso</h5>
				</div>

				<div class="modal-body"><!-- corpo do modal da escola -->
					<form class="form-signin" enctype="multipart/form-data" method="post" action="{{route('newpost', ['eid' => $materias->id])}}">
						{{ csrf_field() }}
						<div class="form-label-group mb-3"> 
							<label for="titulo">Título</label>
							<input class="form-control"  id="titulopub" name="titulopub"  required="required" type="text" placeholder="Título da Publicação"/>
						</div>
						<div class="form-label-group mb-3"> 
							<label for="titulo">Texto</label>
							<textarea class="row form-control ml-1 col-12" id="textopub" name="textopub" rows="15" style="resize: none" placeholder="Conteúdo do Aviso" ></textarea>
						</div>
						
						<div class="row ml-1 col-12 ">
							<input multiple="multiple" id="files" name="files[]" type="file" style="display: none;"> 
							<input class="btn btn-lg btn-primary btn-block col-5 ml-auto mt-2" type="button" value="Anexar" onclick="document.getElementById('files').click();">
							<button class="btn btn-lg btn-primary btn-block col-5 mx-auto" type="submit">Enviar</button>
						</div>
					</form>
				</div><!--fim do corpo -->

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div><!-- fim do modal para criar um aviso -->
@endisset