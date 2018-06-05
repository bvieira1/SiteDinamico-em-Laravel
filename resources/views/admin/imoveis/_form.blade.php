<div class="input-field">
	<input type="text" name="titulo" class="validade" value="{{ isset($registro->titulo) ? $registro->titulo : '' }}">
	<label>Título</label>
</div>
<div class="input-field">
	<input type="text" name="descricao" class="validade" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">
	<label>Descrição</label>
</div>

<div class="row">
	<div class="file-field input-field col m6 s12">
		<div class="btn">
		<span>Imagem</span>
			<input type="file" name="imagem">
		</div>
		<div class="file-path-wrapper">
			<input type="text" class="file-path validade">
		</div>		
	</div>
	<div class="col m6 s12">
	@if(isset($registro->imagem))
		<img width="120" src="{{ asset($registro->imagem) }}">
	@endif
	</div>
</div>

<div class="input-field">
    <select name="status">
        <option value="aluga" {{(isset($registro->status) && $registro->status == 'aluga'  ? 'selected' : '')}}>Aluga</option>
        <option value="vende" {{(isset($registro->status) && $registro->status == 'vende'  ? 'selected' : '')}}>Vende</option>
    </select>
    <label>Status</label>
</div>

<div class="input-field">
    <select name="tipo_id">
        @foreach($tipos as $tipo)
            <option value="{{ $tipo->id }}" {{(isset($registro->tipo_id) && $registro->tipo_id == $tipo->id  ? 'selected' : '')}}>{{ $tipo->titulo }}</option>
        @endforeach
    </select>
    <label>Tipo de Imóvel</label>
</div>

<div class="input-field">
    <input type="text" name="endereco" class="validate" value="{{(isset($registro->endereco) ? $registro->endereco : '')}}">
    <label>Endereço</label>
</div>

<div class="input-field">
    <input type="text" name="cep" class="validate" value="{{(isset($registro->cep) ? $registro->cep : '')}}">
    <label>CEP (Ex: 96848-146)</label>
</div>

<div class="input-field">
    <select name="cidade_id">
        @foreach($cidades as $cidade)
        <option value="{{ $cidade->id }}" {{(isset($registro->cidade_id) && $registro->cidade_id == $cidade->id  ? 'selected' : '')}}>{{ $cidade->nome }}</option>
        @endforeach
    </select>
    <label>Cidade</label>
</div>

<div class="input-field">
    <input type="text" name="valor" class="validate" value="{{(isset($registro->valor) ? $registro->valor : '')}}">
    <label>Valor (Ex: 234.90)</label>
</div>

<div class="input-field">
    <input type="text" name="dormitorios" class="validate" value="{{(isset($registro->dormitorios) ? $registro->dormitorios : '')}}">
    <label>Dormitórios (Ex: 3)</label>
</div>

<div class="input-field">
    <input type="text" name="detalhes" class="validate" value="{{(isset($registro->detalhes) ? $registro->detalhes : '')}}">
    <label>Detalhes (Ex: Sacada: 1 - Banheiro: 2 - Sala de Jantar - Churrasqueira)</label>
</div>

<div class="input-field">
<textarea name="mapa" class="materialize-textarea">
    {{(isset($registro->mapa) ? $registro->mapa : '')}}
</textarea>
    <label>Mapa (Cole o iframe do Google Maps)</label>
</div>

<div class="input-field">
    <select name="publicar">
        <option value="nao" {{(isset($registro->publicar) && $registro->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($registro->publicar) && $registro->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
    <label>Publicar?</label>
</div>




