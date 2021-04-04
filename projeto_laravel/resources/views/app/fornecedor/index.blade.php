<h3>Fornecedor</h3>

@php
    
@endphp

{{-- @dd($fornecedores) --}}

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome']}}
    <br>
    Status: {{ $fornecedores[0]['status']}}
    <br>
    
@endisset

{{-- @unless ($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless --}}
{{-- 
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem varios fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif 
--}}