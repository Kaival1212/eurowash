<?php

namespace App\Livewire;

use App\Models\LockerOrders;
use Livewire\Component;

class EmployeeDashboard extends Component
{
    public $store;
    public $lockers;
    public $lockerOrders;
    public $orderPrice = [];
    public $orderAfterCodes = [];
    public $orderNotes = [];
    public $filterStatus = 'all';
    public $searchTerm = '';
    public $editingNote = null;
    public $newNote = '';

    public function mount()
    {
        $this->store = auth()->user()->store;
        $this->lockers = $this->store->lockers;
        $this->refreshOrders();
    }

    public function refreshOrders()
    {
        $this->lockerOrders = collect();

        foreach ($this->lockers as $locker) {
            $this->lockerOrders = $this->lockerOrders->merge($locker->orders);
        }

        // Initialize arrays with existing values
        foreach ($this->lockerOrders as $order) {
            if (!isset($this->orderPrice[$order->id])) {
                $this->orderPrice[$order->id] = $order->price;
            }
            if (!isset($this->orderAfterCodes[$order->id])) {
                $this->orderAfterCodes[$order->id] = $order->after_code;
            }
            if (!isset($this->orderNotes[$order->id])) {
                $this->orderNotes[$order->id] = $order->Notes;
            }
        }
    }

    public function confirmLockerOrder($lockerOrderID)
    {
        $order = LockerOrders::find($lockerOrderID);
        $order->status = 'confirmed';
        $order->save();

        $this->refreshOrders();
    }

    public function cancelLockerOrder($lockerOrderID)
    {
        $order = LockerOrders::find($lockerOrderID);
        $order->status = 'cancelled';
        $order->save();

        $this->refreshOrders();
    }

    public function completeLockerOrder($lockerOrderID)
    {
        $order = LockerOrders::find($lockerOrderID);

        if (empty($this->orderPrice[$lockerOrderID])) {
            $this->addError('price-'.$lockerOrderID, 'Please enter a price');
            return;
        }

        $order->status = 'completed';
        $order->price = $this->orderPrice[$lockerOrderID];
        $order->after_code = $this->orderAfterCodes[$lockerOrderID];
        $order->save();

        $this->refreshOrders();
    }

    public function updateOrderNote($lockerOrderID)
    {
        $this->validateOnly('orderNotes.'.$lockerOrderID, [
            'orderNotes.'.$lockerOrderID => 'nullable|string|max:255',
        ]);

        $order = LockerOrders::find($lockerOrderID);
        $order->Notes = $this->orderNotes[$lockerOrderID];
        $order->save();

        $this->editingNote = null;
        $this->refreshOrders();
    }

    public function render()
    {
        $filteredOrders = $this->lockerOrders;

        // Apply status filter
        if ($this->filterStatus !== 'all') {
            $filteredOrders = $filteredOrders->where('status', $this->filterStatus);
        }

        // Apply search filter
        if (!empty($this->searchTerm)) {
            $searchTerm = strtolower($this->searchTerm);
            $filteredOrders = $filteredOrders->filter(function ($order) use ($searchTerm) {
                return stripos($order->name, $searchTerm) !== false ||
                       stripos($order->email, $searchTerm) !== false ||
                       stripos($order->phone, $searchTerm) !== false ||
                       stripos($order->locker->locker_number, $searchTerm) !== false;
            });
        }

        return view('livewire.employee-dashboard', [
            'filteredOrders' => $filteredOrders
        ]);
    }
}
