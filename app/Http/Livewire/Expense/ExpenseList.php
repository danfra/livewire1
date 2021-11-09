<?php

namespace App\Http\Livewire\Expense;

use App\Models\Expense;
use Livewire\Component;

class ExpenseList extends Component
{
    public function render()
    {
        $expenses = //auth()->user()->expenses()->count() ?
            auth()->user()->expenses()->paginate(2); // :
        //    [];
        //(['id', 'description', 'amount', 'type', 'created_at']);

        return view('livewire.expense.expense-list', compact('expenses'));
    }

    public function remove($expense)
    {
        $exp = auth()->user()->expenses()->find($expense);
        $exp->delete();

        session()->flash('message', 'Registro Removido com Sucesso!');
    }
}
