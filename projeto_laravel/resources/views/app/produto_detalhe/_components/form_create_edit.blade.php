@if (isset($produto_detalhe->id))
    <form action="{{ route('produto-detalhe.update', ['produto' => $produto_detalhe->id]) }}" method="POST">
        @method('PUT')
@else
    <form action="{{ route('produto-detalhe.store') }}" method="POST">
@endif
    @csrf
    <input value="{{ $produto_detalhe->produto_id ?? old('produto_id') }}" type="text" name="produto_id" placeholder="ID" class="borda-preta">
    {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}
    
    <input value="{{ $produto_detalhe->comprimento ?? old('comprimento') }}" type="text" name="comprimento" placeholder="Comprimento" class="borda-preta">
    {{ $errors->has('comprimento') ? $errors->first('comprimento') : '' }}
    
    <input value="{{ $produto_detalhe->largura ?? old('largura') }}" type="text" name="largura" placeholder="Largura" class="borda-preta">
    {{ $errors->has('largura') ? $errors->first('largura') : '' }}
    
    <input value="{{ $produto_detalhe->altura ?? old('altura') }}" type="text" name="altura" placeholder="Altura" class="borda-preta">
    {{ $errors->has('altura') ? $errors->first('altura') : '' }}
    
    <select name="unidade_id" id="">
        <option>Selecione a Unidade de Medida</option>

        @foreach ($unidades as $unidade)
            <option value="{{ $unidade->id }}" {{($produto_detalhe->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }}>{{ $unidade->descricao }}</option>
        @endforeach
    </select>
    {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}

    <button type="submit" class="borda-preta">Cadastrar</button>
</form>