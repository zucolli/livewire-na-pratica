<?php

namespace App\Http\Livewire\Expense;

use App\Models\Expense;
use Livewire\Component;
use Livewire\WithFileUploads;

class ExpenseCreate extends Component
{
    use WithFileUploads;

    public $amount;
    public $type;
    public $description;
    public $photo;
    public $expense_date;

    protected $rules = [
        'amount'        => 'required',
        'type'          => 'required',
        'description'   => 'required',
        'photo'         => 'image|nullable'
    ];

    public function createExpense()
    {
        $this->validate();

        if($this->photo) {
            $this->photo = $this->photo->store('expenses-photos', 'public');
        }

        auth()->user()->expenses()->create([
            'amount' => $this->amount,
            'type' => $this->type,
            'description' => $this->description,
            'user_id' => 1,
            'photo' => $this->photo,
            'expense_date' => $this->expense_date
        ]);

        session()->flash('message', 'Despesa criada com sucesso!');

        $this->amount = $this->type = $this->description = null;
    }

    public function render()
    {
        return view('livewire.expense.expense-create');
    }
}
