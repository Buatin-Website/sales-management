<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerPolicy
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

    public function create(User $user): bool
    {
        if (! $user->isSuperAdmin()) {
            return false;
        }

        return true;
    }

    public function update(User $user): bool
    {
        if (! $user->isSuperAdmin()) {
            return false;
        }

        return true;
    }

    public function delete(User $user): bool
    {
        if (! $user->isSuperAdmin()) {
            return false;
        }

        return true;
    }

    public function restore(User $user): bool
    {
        if (! $user->isSuperAdmin()) {
            return false;
        }

        return true;
    }

    public function forceDelete(User $user): bool
    {
        if (! $user->isSuperAdmin()) {
            return false;
        }

        return true;
    }
}
