<div class="max-w-7xl mx-auto py-15 px-4">

    <x-slot name="header">
        <p class="dark:text-indigo-300">Meus Registros</p>
    </x-slot>

    <div class="w-full mx-auto text-right mb-4 mt-6">
        <a href="{{route('expenses.create')}}"
           class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded">Criar
            Registro</a>
    </div>

    @include('includes.message')

{{--    @dd($expenses)--}}

    <table class="table-auto w-full mx-auto dark:text-white">
        <thead>
        <tr class="text-left">
            <th class="px-4 py-2">#</th>
            <th class="px-4 py-2">Descrição</th>
            <th class="px-4 py-2">Valor</th>
            <th class="px-4 py-2">Data Registro</th>
            <th class="px-4 py-2">Ações</th>
        </tr>
        </thead>

        <tbody>
        @foreach($expenses as $exp)
            <tr>
                <td class="px-4 py-2 border">{{$exp->id}}</td>
                <td class="px-4 py-2 border">{{$exp->description}}</td>
                <td class="px-4 py-2 border">
                    <span class="{{ $exp->type == 1 ? 'dark:text-green-800' : 'dark:text-red-800 font-bold' }}">
                        R$ {{ number_format($exp->amount, 2, ',', '.') }}
                    </span>
                </td>

                <td class="px-4 py-2 border">
{{--                    {{ $exp->expense_date ? $exp->expense_date->format('d/m/Y H:i:s') : $exp->created_at->format('d/m/Y H:i:s') }}--}}
                    {{ $exp->expense_date ? $exp->expense_date : $exp->created_at->format('d/m/Y H:i:s') }}
                </td>
                <td class="px-4 py-4 border">
                    <a href="{{route('expenses.edit', $exp->id)}}"
                       class="px-4 py-2 border rounded bg-teal-700 text-white">Editar</a>
                    <a href="#" wire:click.prevent="remove({{$exp->id}})"
                       class="px-4 py-2 border rounded bg-red-500 text-white">Remover</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="w-full mx-auto mt-10">
        @if(count($expenses))
            {{$expenses->links()}}
        @endif
    </div>
</div>
