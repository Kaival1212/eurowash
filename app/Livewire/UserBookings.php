<?php

namespace App\Livewire;

use Livewire\Component;

class UserBookings extends Component
{

    public $bookings;
    public $user;



    public function mount()
    {
        $this->user = auth()->user();
        $this->bookings = $this->user->lockers()->get();
    }


    public function showBookingDetails($bookingId)
    {
        $this->redirect(route('user.order', ['orderID' => $bookingId]));
    }

    public function render()
    {
        return view('livewire.user-bookings');
    }
}

