<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Booking;
use App\Models\UserRoles;
use Illuminate\Auth\Access\Response;

class BookingPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->user_type == env('ADMIN_ROLE_ID') || $user->user_type == env('SUPERADMIN_ROLE_ID');
    }
}
