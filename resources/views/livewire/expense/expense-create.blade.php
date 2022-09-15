<div>
    <h3>Criar Registro</h3>
    <hr>

<form action="" wire:submit.prevent="createExpense">
    <p>
        <label>Descrição do Registro</label>
        <input type="text" name="description" class="shadow border-t" wire:model="description">
    </p>

    <p>
        <label>Valor do Registro</label>
        <input type="text" name="amount" class="shadow border-t" wire:model="amount">
    </p>

    <p>
        <label>Tipo do Registro</label>
        <select name="type" id="" class="shadow border-t" wire:model="type">
            <option value="">Selecione o tipo:</option>
            <option value="1">Entrada</option>
            <option value="2">Saída</option>
        </select>
    </p>

    <button type="submit" class="btn btn-default">Criar Registro</button>
</form>


</div>
