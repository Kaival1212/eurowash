<?php

namespace App\Livewire;

use App\Models\store;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Welcome extends Component
{
    public $store;

    public function mount( $name = null)
    {
        if ($name == null) {
            $name = "Eurowash";
        }

        $this->store = store::where("name" , $name)->first();

}

     #[Layout(name: 'components.layouts.app')]
    public function render()
    {
        return view('livewire.welcome')
         ->with(['store' => $this->store,]);

    }
}
