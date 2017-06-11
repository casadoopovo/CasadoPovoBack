@extends('admin.menu')

@section('content-admin')
<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Cadastro de Vereadores</h3>
	</div>
	@if(isset($data))
			<h3>
				{{$data}}
			</h3>

	 @endif 
	<!--<form action="/vereadores" method="post">-->
	{!! Form::open(['method' => 'post', 'route' => 'vereadores.store', 'files' => true]) !!}
		<input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
		<div style="padding: 4%;">
			<div class="form-group">
				<label for="example-text-input" class="col-2 col-form-label">Nome</label>
				<div class="col-10">
					<input class="form-control" type="text" name="nome" placeholder="Nome do Vereador" id="example-text-input">
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-6">
					<label for="example-text-input" class="col-2 col-form-label">Número de Votos</label>
					<div class="col-10">
						<input class="form-control" type="text" name="votos" placeholder="Numero de votos" id="example-text-input">
					</div>
				</div>
				<div class="form-group col-md-6">
					<label for="example-text-input" class="col-2 col-form-label">Situação</label>
					<select class="form-control" name="situacao" id="exampleSelect1">
				      <option value="0">Eleito</option>
				      <option value="1">Reeleito</option>
				    </select>
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col-md-6">
					<label for="example-text-input" class="col-2 col-form-label">Inicio da Legislatura</label>
					<div class="col-10">
						<input class="form-control" type="text" name="inicio" placeholder="Digite o inicio da legislatura" id="example-text-input">
					</div>
				</div>

				<div class="form-group col-md-6">
					<label for="example-text-input" class="col-2 col-form-label">Fim da Legislatura</label>
					<div class="col-10">
						<input class="form-control" type="text" name="fim" placeholder="Digite fim da legislatura" id="example-text-input">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-6">
					<label for="example-text-input" class="col-2 col-form-label">Partido Político</label>
					<div class="col-10">
						<input class="form-control" type="text" name="partido" placeholder="Nome do partido politico" id="example-text-input">
					</div>
				</div>

				<div class="form-group col-md-6">
					<label for="example-text-input" class="col-2 col-form-label">Declaração de Bens</label>
					<div class="col-10">
						<input class="form-control" type="text" name="bens" placeholder="Digite Valor declarado" id="example-text-input">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label for="example-text-input" class="col-2 col-form-label">Foto do Vereador</label>
					<label class="custom-file">
					  <input type="file" id="imgInp" name="imgInp" class="custom-file-input">
					</label>
					<img id="blah" class="img-responsive" src="#" alt="Foto do candidato" />
				</div>

				<div class="form-group col-md-6">
					
				</div>
			</div>
			
			
			
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	{!! Form::close() !!}
	
	
</div>
@endsection