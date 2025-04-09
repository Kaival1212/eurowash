<?php

namespace App\Livewire;

use Livewire\Component;

class UserOrder extends Component
{

    public $order;


    public function mount($orderID)
    {
        $this->order = \App\Models\LockerOrders::find($orderID);

        if (!$this->order) {
            abort(404);
        }
    }


    public function render()
    {
        return view('livewire.user-order');
    }
}
