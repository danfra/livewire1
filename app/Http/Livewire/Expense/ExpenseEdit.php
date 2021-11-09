<?php

namespace App\Http\Livewire\Expense;

use App\Models\Expense;
use Livewire\Component;

class ExpenseEdit extends Component
{
    public Expense $expense;


    public $description;
    public $amount;
    public $type;

    protected $rules = ([

        'amount' => 'required',
        'type' => 'required',
        'description' => 'required',

    ]);


    public function mount(/*Expense $expense*/)
    {
        //dd($expense);

        $this->description = $this->expense->description;
        $this->amount = $this->expense->amount;
        $this->type = $this->expense->type;
    }

    public function updateExpense()
    {
        // dd($this->amount, $this->type, $this->description);

        $this->validate();

        $this->expense->update([

            'amount' => $this->amount,
            'type' => $this->type,
            'description' => $this->description


        ]);

        session()->flash('message', 'Registro Atualizado com Sucesso!');

        // $this->type = $this->description = $this->amount = null;
    }

    public function render()
    {
        return view('livewire.expense.expense-edit');
    }
}
