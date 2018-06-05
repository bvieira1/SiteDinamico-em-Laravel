<div class="row">
	<form action="{{route('site.busca')}}" >
		<div class="input-field col s6 m4">
			<select name="status">
				<option {{ isset($busca['status']) && $busca['status'] == 'todos' ? 'selected' : '' }} value="todos">Aluga e Vende</option>
				<option {{ isset($busca['status']) && $busca['status'] == 'aluga' ? 'selected' : '' }} value="aluga">Aluga</option>
				<option {{ isset($busca['status']) && $busca['status'] == 'vende' ? 'selected' : '' }} value="vende">Vende</option>
			</select>
			<label>Status</label>
		</div>
		<div class="input-field col s6 m4">
			<select name="tipo_id">
				<option {{ isset($busca['tipo_id']) && $busca['tipo_id'] == 'todos' ? 'selected' : '' }} value="todos">Todos os Tipos</option>
				@foreach($tipos as $tipo)
				<option {{ isset($busca['tipo_id']) && $busca['tipo_id'] == $tipo->id ? 'selected' : '' }} value="{{$tipo->id}}">{{$tipo->titulo}}</option>
				@endforeach
			</select>
			<label>Tipo de imóvel</label>
		</div>
		<div class="input-field col s6 m4">
			<select name="cidade_id">
				<option {{ isset($busca['cidade_id']) && $busca['cidade_id'] == 'todos' ? 'selected' : '' }} value="todos">Todas as Cidades</option>
				@foreach($cidades as $cidade)
				<option {{ isset($busca['cidade_id']) && $busca['cidade_id'] == $cidade->id ? 'selected' : '' }} value="{{$cidade->id}}">{{$cidade->nome}}</option>
				@endforeach
			</select>
			<label>Cidade</label>
		</div>
		<div class="input-field col s6 m3">
			<select name="dormitorios">
				<option {{ isset($busca['dormitorios']) && $busca['dormitorios'] == 0 ? 'selected' : '' }} value="0">Todos</option>
				<option {{ isset($busca['dormitorios']) && $busca['dormitorios'] == 1 ? 'selected' : '' }} value="1">1</option>
				<option {{ isset($busca['dormitorios']) && $busca['dormitorios'] == 2 ? 'selected' : '' }} value="2">2</option>
				<option {{ isset($busca['dormitorios']) && $busca['dormitorios'] == 3 ? 'selected' : '' }} value="3">3</option>
				<option {{ isset($busca['dormitorios']) && $busca['dormitorios'] == 4 ? 'selected' : '' }} value="4">Mais</option>
			</select>
			<label>Dormitórios</label>
		</div>
		<div class="input-field col s12 m4">
			<select name="valor">
				<option {{(isset($busca['valor']) && $busca['valor'] == 0 ? 'selected' : '' )}} value="0">Todos os Valores</option>
				<option {{(isset($busca['valor']) && $busca['valor'] == 1 ? 'selected' : '' )}} value="1">Até R$ 500,00</option>
				<option {{(isset($busca['valor']) && $busca['valor'] == 2 ? 'selected' : '' )}} value="2">R$ 500,00 a 1.000,00</option>
				<option {{(isset($busca['valor']) && $busca['valor'] == 3 ? 'selected' : '' )}} value="3">R$ 1.000,00 a 5.000,00</option>
				<option {{(isset($busca['valor']) && $busca['valor'] == 4 ? 'selected' : '' )}} value="4">R$ 5.000,00 a 10.000,00</option>
				<option {{(isset($busca['valor']) && $busca['valor'] == 5 ? 'selected' : '' )}} value="5">R$ 10.000,00 a 50.000,00</option>
				<option {{(isset($busca['valor']) && $busca['valor'] == 6 ? 'selected' : '' )}} value="6">R$ 50.000,00 a 100.000,00</option>
				<option {{(isset($busca['valor']) && $busca['valor'] == 7 ? 'selected' : '' )}} value="7">R$ 100.000,00 a 200.000,00</option>
				<option {{(isset($busca['valor']) && $busca['valor'] == 8 ? 'selected' : '' )}} value="8">R$ 200.000,00 a 300.000,00</option>
				<option {{(isset($busca['valor']) && $busca['valor'] == 9 ? 'selected' : '' )}} value="9">R$ 300.000,00 a 500.000,00</option>
				<option {{(isset($busca['valor']) && $busca['valor'] == 10 ? 'selected' : '' )}} value="10">R$ 500.000,00 a 1.000.000,00</option>
				<option {{(isset($busca['valor']) && $busca['valor'] == 11 ? 'selected' : '' )}} value="11">Acima de R$ 1.000.000,00</option>
				
			</select>
			<label>Valor</label>
		</div>
		<div class="input-field col s12 m3">
			<input class="validate" type="text" name="bairro" value="{{ isset($busca['bairro'])  ? $busca['bairro'] : '' }}">
			<label>Bairro</label>
		</div>
		<div class="input-field col s12 m2">
			<button class="btn deep-range darken-1 right">Filtrar</button>
		</div>
	</form>
</div>