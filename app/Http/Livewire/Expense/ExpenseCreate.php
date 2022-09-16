<?php

namespace App\Http\Livewire\Expense;

use Livewire\Component;
use App\Models\Expanse;

class ExpenseCreate extends Component
{

    public $amount;
    public $type;
    public $description;

    public function createExpense()
    {
        Expense::create([
            'amount' => $this->amount,
            'type' => $this->type,
            'description' => $this->description,
            'user_id' => 1
        ]);
    }

    public function render()
    {
        return view('livewire.expense.expense-create');
    }
}
