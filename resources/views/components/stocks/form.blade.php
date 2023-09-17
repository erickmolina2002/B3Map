<form action="{{ $action }}" method="post">
    @csrf

    @if($update)
        @method('put')
    @endif

    <div class="mb-3" >
        <label for="ticket" class="form-label">Ativo:</label>
        <input type="text" id="ticket" name="ticket" oninput="this.value = this.value.toUpperCase()">

        <label for="price" class="form-label">Valor:</label>
        <input type="text" id="price" name="price">

        <label for="number" class="form-label">Quantidade:</label>
        <input type="number" id="number" name="number">

        <label for="date" class="form-label">Data:</label>
        <input type="date" id="date" name="date">

        <button class="btn-info" type="submit">enviar</button>
    </div>
</form>

