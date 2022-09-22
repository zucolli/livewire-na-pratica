<div class="py-5">

    <x-slot name="header">Editar Registro</x-slot>

    @if(session()->has('message'))
        <h3>{{ session('message') }}</h3>
    @endif

    <form action="" wire:submit.prevent="updateExpense">
        <p>
            <label>Descrição do Registro</label>
            <input type="text" name="description" class="shadow border-t" wire:model="description">
            @error('description')
                <h5>{{ $message }}</h5>
            @enderror
        </p>

        <p>
            <label>Valor do Registro</label>
            <input type="text" name="amount" class="shadow border-t" wire:model="amount">
            @error('amount')
                <h5>{{ $message }}</h5>
            @enderror
        </p>

        <p>
            <label>Tipo do Registro</label>
            <select name="type" id="" class="shadow border-t" wire:model="type">
                <option value="">Selecione o tipo:</option>
                <option value="1">Entrada</option>
                <option value="2">Saída</option>
            </select>
            @error('type')
                <h5>{{ $message }}</h5>
            @enderror
        </p>

        <button type="submit" class="btn btn-default">Editar Registro</button>
    </form>


</div>
