@extends('admin.menu')

@section('content-admin')
<div class="panel panel-default">
    <div class="panel-heading">listagem</div>

    @if(isset($vereadores))
		<table class="table table-responsive">
		  	  <thead>
				    <tr>
				      <th>Nome</th>
				      <th>Partido</th>
				      <th></th>
				    </tr>
				  </thead>
				  <tbody>

				  @foreach($vereadores as $v)
				    <tr>
				      <td>{{$v->nome}}</td>
				      <td>{{$v->partido}}</td>
				      <td><a href=""><img src="{{ asset('img/remove.png') }}" alt="remove"></a></td>
				    </tr>
				  @endforeach
				  </tbody>
		</table>
	@endif 
</div>
@endsection