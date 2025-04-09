<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Lockers extends Component
{

    public $lockers;
    public $store;

    public function mount($slug)
    {
        $this->store = \App\Models\Store::where('slug', $slug)->first();
        $this->lockers = $this->store->lockers()->where('status', 'available')->get();
    }

    public function bookLocker($lockerId)
    {
        $locker = \App\Models\Locker::find($lockerId);

        if ($locker && $locker->status === 'available') {

            return redirect()->route('lockers.book', [
                'locker' => $locker->id,
                'slug' => $this->store->slug,
            ]);

        }


    }

    #[Layout('components.layouts.app', [
        'title' => 'Book a Locker at Eurowash',
        'description' => 'Reserve your laundry locker at Eurowash. Available 24/7. Easy and secure.',
        'keywords' => 'laundry lockers, locker booking, Eurowash Twickenham',
        'canonical' => '',
        'robots' => 'index, follow'
    ])]

    public function render()
    {
        return view('livewire.lockers');
    }
}
