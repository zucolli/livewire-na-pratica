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
        Expanse::create([
            
        ])
    }

    public function render()
    {
        return view('livewire.expense.expense-create');
    }
}
