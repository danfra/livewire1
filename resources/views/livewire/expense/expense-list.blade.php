<div>

    @include('includes.message')

    <x-slot name="header">

        Meus Registros

    </x-slot>

    <table>
        <thead>
            <th>#</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Data Registro</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach ($expenses as $exp)


                <tr>
                    <td>{{ $exp->id }}</td>
                    <td>{{ $exp->description }}</td>
                    <td>R$ {{ number_format($exp->amount, 2, ',', '.') }}</td>
                    <td>{{ $exp->created_at->format('d/m/Y H:i:s') }}</td>
                    <td>

                        <a href="{{ route('expenses.edit', $exp->id) }}">Editar</a>
                        <a href="#" wire:click.prevent="remove({{ $exp->id }})">Remover</a>

                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>

    @if (count($expenses))

        {{ $expenses->links() }}
    @endif
</div>
