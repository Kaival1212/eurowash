<?php

namespace App\Policies;

use App\Models\LockerOrders;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LockerOrdersPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->isAdmin() || $user->isEmployee();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, LockerOrders $lockerOrders): bool
    {
        if ($user->isAdmin() || $user->isEmployee()) {
            return true;
        }

        // Customers can only update their own order and NOT price/status/after_code
        if ($user->id !== $lockerOrders->user_id) {
            return false;
        }

        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, LockerOrders $lockerOrders): bool
    {
    if ($user->isAdmin() || $user->isEmployee()) {
        return true;
    }

    if ($user->id !== $lockerOrders->user_id) {
        return false;
    }

    return true;

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, LockerOrders $lockerOrders): bool
    {
        return $user->isAdmin() || $user->isEmployee();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, LockerOrders $lockerOrders): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, LockerOrders $lockerOrders): bool
    {
        return false;
    }
}
