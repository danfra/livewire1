<div class="py-4">

    <x-slot name="header">

        Criar Registro

    </x-slot>

    @include('includes.message')

    <!--<h4>Criar Registro</h4>

    <hr>-->
    <form action="" wire:submit.prevent="createExpense">
        <p>
            <label for="">Descrição Registro</label>
            <input type="text" name="description" class="shadown border-t" wire:model="description">
            @error('description')
            <h5>{{ $message }}</h5>
        @enderror
        </p>
        <p>
            <label for="">Valor do registro</label>
            <input type="text" name="amaount" class="shadown border-t" wire:model="amount">

            @error('amount')
            <h5>{{ $message }}</h5>
        @enderror

        </p>

        <p>
            <label for="">Tipo de Registro</label>
            <select name="type" class="shadown border-t" wire:model="type">
                <option value="">Selecione o Tipo do Registro</option>
                <option value="1">Entrada</option>
                <option value="2">Saída</option>
            </select>
            @error('type')
            <h5>{{ $message }}</h5>
        @enderror
        </p>

        <button class="shadown border-t" type="submit">Criar Registro</button>

    </form>

</div>
