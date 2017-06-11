@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
       <div class="col-md-3">
           <ul class="nav nav-pills nav-stacked">
              <li role="presentation" class="active"  data-toggle="collapse" aria-expanded="false" href="#vereadores" ><a href="#">Vereadores</a></li>
                <ul id="vereadores" classve="collapse">
                    <li><a href="/vereadores/create">Adicionar Vereador</a></li>
                    <li><a href="/vereadores">Listar Vereadores</a></li>
                </ul>
              <li role="presentation" data-toggle="collapse" aria-expanded="false" href="#sessoes"><a href="#">Sessão</a></li>
              <ul id="sessoes" class="collapse">
                    <li><a href="/secao/create">Adicionar Sessão</a></li>
                    <li><a href="/secao">Listar Sessões</a></li>
                </ul>
            </ul>
       </div>

        <div class="col-md-9">
              @yield('content-admin')
        </div>
    </div>
</div>
@endsection
