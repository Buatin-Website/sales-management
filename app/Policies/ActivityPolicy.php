<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ActivityPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        if (! $user->isSuperAdmin()) {
            return false;
        }

        return true;
    }

    public function view(User $user): bool
    {
        if (! $user->isSuperAdmin()) {
            return false;
        }

        return true;
    }
}
