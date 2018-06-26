@extends('layouts.app')

@section('content')

    <h1>Novo produto</h1>

    <form action="{{ url('/produtos/atualizar',$p->id) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Nome</label>
            <input name="nome"
                   class="form-control" value="{{ $p->nome }}" />
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input name="valor" class="form-control"
                   value="{{ $p->valor }}"/>
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="descricao" class="form-control"
                   value="{{ $p->descricao }}"/>
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input name="quantidade" class="form-control"
                   value="{{ $p->quantidade }}"/>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
@stop