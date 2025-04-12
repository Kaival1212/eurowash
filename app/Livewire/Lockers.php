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

    #[Layout('components.layouts.smartLocker', [
        'title' => 'Smart Lockers at Eurowash – 24/7 Laundry Locker Booking in Twickenham',
        'description' => 'Book a smart laundry locker at Eurowash Twickenham. Convenient 24/7 drop-off and pick-up service with secure, contactless access. No account required.',
        'keywords' => 'smart laundry lockers, Eurowash smart lockers, 24/7 laundry service, locker booking Twickenham, contactless laundry Twickenham, laundry locker system',
        'canonical' => 'https://eurowash.co.uk/smart-lockers',
        'robots' => 'index, follow'
    ])]


    public function render()
    {
        return view('livewire.smartLocker.lockers');
    }
}
