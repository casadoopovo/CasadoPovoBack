@extends('admin.menu')

@section('content-admin')

<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Cadastro de secao</h3>



		{!! Form::open(['method' => 'post', 'route' => 'secao.store', 'files' => true]) !!}
		<input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
		<div style="padding: 4%;">
			<div class="form-group">
				<label for="example-text-input" class="col-2 col-form-label">Data da sessão</label>
				<div class="col-10">
					<input class="form-control" type="text" name="dataSecao" placeholder="Digite a data" id="example-text-input">
				</div>
			</div>

			<div class="row">				
				<div class="form-group col-md-6">
					<label for="example-text-input" class="col-2 col-form-label">Situação</label>
					<select class="form-control" name="situacao" id="select-vereadores">
					@foreach($vereadores as $v)
				      <option value="{{$v->id}}" data-nome="{{$v->nome}}">{{$v->nome}}</option>
				     @endforeach
				    </select>
				</div>

				<div class="form-group col-md-6">
					<label for="example-text-input" class="col-2 col-form-label"></label>
					<button id="adicionar-vereador" class="btn btn-primary col-md-6">Adicionar</button>
				</div>
			</div>

			<div class="row">
				<h3>Lista de vereadores adicionados</h3>

			</div>
		</div>
	</div>
			
			
			
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	{!! Form::close() !!}
	</div>
</div>


@endsection