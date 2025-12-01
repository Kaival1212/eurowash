<?php

namespace App\Livewire;

use App\Mail\mailToEmploye;
use App\Mail\PendingOrder;
use App\Models\LockerOrders;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\Attributes\Layout;

class LockerBooking extends Component
{

    public $locker;
    public $store;

    public $name = '';
    public $email = '';
    public $phone = '';
    public $notes = '';

    public function mount($locker)
    {
        $this->locker = \App\Models\Locker::find($locker);
        $this->store = $this->locker->store;

    }

    public function saveBooking()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'notes' => 'nullable|string|max:500',
        ]);

       $order =  LockerOrders::create([
            'locker_id' => $this->locker->id,
            //'user_id' => auth()->user() ? auth()->user()->id : null,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'before_code' => $this->locker->code,
            'notes' => $this->notes,
        ]);

        // Update the locker status to booked

        if ($order == null) {
            session()->flash('error', 'Failed to book the locker. Please try again.');
            return redirect()->back();
        }


        $this->locker->status = 'inUse';
        $this->locker->save();


        Mail::to($this->email)->send(new PendingOrder($order , $this->name , $this->locker));
        // mail to the emaployee as well
        $employees = User::where('role', 'employee')->get();
        foreach ($employees as $employee) {
            Mail::to($employee->email)->send(new mailToEmploye($order));
        }

        usleep(1000000);
        $order->status = 'confirmed';
        $order->save();

        session()->flash('success', 'Locker booked successfully!');

     return redirect(route("user.order" , ["orderID" => $order->id] ))->with('success', 'Locker booked successfully!');

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
        return view('livewire.locker-booking');
    }
}
