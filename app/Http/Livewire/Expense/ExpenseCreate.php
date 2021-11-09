<?php

namespace App\Http\Livewire\Expense;

use App\Models\Expense;
use Livewire\Component;

class ExpenseCreate extends Component
{
    public $amount; //= "5";
    public $type; // = "6";
    public $description; // = "7";


    protected $rules = ([

        'amount' => 'required',
        'type' => 'required',
        'description' => 'required',

    ]);




    public function createExpense()
    {
        // dd($this->amount, $this->type, $this->description);

        $this->validate();

        auth()->user()->expenses()->create([

            'amount' => $this->amount,
            'type' => $this->type,
            'description' => $this->description,
            'user_id' => 1

        ]);

        session()->flash('message', 'Registro criado com Sucesso!');

        $this->type = $this->description = $this->amount = null;
    }

    public function render()
    {

        return view('livewire.expense.expense-create');
    }
}
