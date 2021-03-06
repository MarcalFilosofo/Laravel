@extends('app.layouts.basico')

@section('titulo', 'Detalhes do Produto')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Detalhes do Produto - Adicionar</p>
        </div>
        
        <div class="menu">
            <ul>
                <li>
                    <a href="#">Voltar</a>
                </li>
                <li>
                    {{-- <a href="{{ route('app.produto')}}">Consulta</a> --}}
                </li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('app.produto_detalhe._components.form_create_edit')             
                @endcomponent
            </div>
        </div>
    </div>
@endsection