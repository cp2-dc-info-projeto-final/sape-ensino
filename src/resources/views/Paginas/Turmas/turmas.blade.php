@extends('Layouts.ext_M.mural')

@section('turma.escola.materia')



    @if(Auth::user()->cargo == "Diretor")
        
		<button class="btn btn-outline-primary btn-block my-2" data-toggle="collapse" data-target="#CollapseSidebar">Opções</button>
			<div class="collapse bg-light p-2" id="CollapseSidebar">
                <!--<button class="btn btn-outline-primary btn-block my-2"  type="button" data-toggle="modal" data-target="#ModalCod">Código de Acesso</button>-->
				<!--<button class="btn btn-outline-primary btn-block" type="button" data-toggle="modal" data-target="#ModalTurma">Cadastrar Materias</button>-->
				<a class="btn btn-danger btn-block font-weight-bold text-white" data-toggle="modal" data-target="#ModalApagarTurma">Apagar turma</a>
            </div>
            
    @elseif(Auth::user()->cargo == "Professor")

        <button class="btn btn-outline-primary btn-block my-2" data-toggle="collapse" data-target="#CollapseSidebar">Opções</button>
        <div class="collapse bg-light p-2" id="CollapseSidebar">
            <!--<button class="btn btn-outline-primary btn-block my-2"  type="button" data-toggle="modal" data-target="#ModalCod">Código de Acesso</button>-->
            <button class="btn btn-outline-primary btn-block" type="button" data-toggle="modal" data-target="#ModalTurma">Cadastrar Materias</button>
        </div>

	@endif

	

@stop

@section('sub_content')



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













    
    <div class="mt-3 wow fadeIn">
        {{ Breadcrumbs::render('turmas', $turmas, $escolas) }}
    </div>
    @include('Includes.errors')        

   


        <div class="row ml-md-2">
        
                <div class="card my-4 mx-4 col-10 col-sm-10 col-lg-3 ">
                    <div class="card-body">
                        <h3 class="card-title"  style="white-space:nowrap;">Dale</h3>
                    </div>
                    <div class="card-footer bg-white">
                        <a class="text-decoration-none" href='#'><button class="btn btn-primary btn-block">Entrar</button></a>
                    </div>

        </div> <!-- fim do alinhamento horizontal dos cards-->

    
    

@stop