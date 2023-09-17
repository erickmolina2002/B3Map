<form action="{{ $action }}" method="post">
    @csrf

    @if($update)
        @method('put')
    @endif

    <div class="mb-3" >
        <label for="ativo" class="form-label">Ativo:</label>
        <input type="text" id="ativo" name="ativo" oninput="this.value = this.value.toUpperCase()">

        <label for="valor" class="form-label">Valor:</label>
        <input type="text" id="valor" name="valor" oninput="mascararValor(this)">

        <label for="quantidade" class="form-label">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade">

        <label for="data" class="form-label">Data:</label>
        <input type="date" id="data" name="data">

        <button class="btn-info" type="submit">enviar</button>
    </div>
</form>
<script>
    function mascararValor(input) {
        input.value = input.value.replace(/[^\d,]/g, '');
        input.value = input.value.replace(/,+/g, ',');
        if (!input.value.startsWith('R$')) {
            input.value = 'R$ ' + input.value;
        }
        const partes = input.value.split(',');
        const valorNumerico = parseFloat(partes.join('.').replace('R$ ', ''));
        if (!isNaN(valorNumerico)) {
            input.value = 'R$ ' + valorNumerico.toFixed(2).replace('.', ',');
        }
        input.setSelectionRange(input.value.length, input.value.length);
    }
</script>
