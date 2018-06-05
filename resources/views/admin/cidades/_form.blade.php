<div class="input-field">
	<input type="text" name="nome" class="validade" value="{{ isset($registro->nome) ? $registro->nome : '' }}">
	<label>Nome da Cidade</label>
</div>

<div class="input-field">
	<input type="text" name="estado" class="validade" value="{{ isset($registro->estado) ? $registro->estado : '' }}">
	<label>Estado</label>
</div>

<div class="input-field">
	<input type="text" name="sigla_estado" class="validade" value="{{ isset($registro->sigla_estado) ? $registro->sigla_estado : '' }}">
	<label>Sigla do Estado</label>
</div>
