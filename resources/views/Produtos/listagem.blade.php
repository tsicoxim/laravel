@extends('layouts.app')

@section('content')
    <h1>Listagem de produtos</h1>
    <table class="table table-striped table-bordered table-hover">
        @foreach ($produtos as $p)
            <tr>
                <td>{{ $p->nome }} </td>
                <td>{{ $p->valor }} </td>
                <td>{{ $p->descricao }} </td>
                <td>{{ $p->quantidade }} </td>
                <td>
                    <a href="/produtos/mostra/{{$p->id}}">
                        <i class="fas fa-info-circle"> </i>
                    </a>
                </td>
                <td>
                    <a href="{{action('ProdutoController@remove', $p->id)}}">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td>
                <td>
                    <a href="/produtos/editar/{{$p->id}}">
                        <i class="far fa-edit"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@stop