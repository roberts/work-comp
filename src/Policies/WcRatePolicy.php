<?php

declare(strict_types=1);

namespace Roberts\WorkComp\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Roberts\WorkComp\Models\WcRate;
use Tipoff\Support\Contracts\Models\UserInterface;

class RatePolicy
{
    use HandlesAuthorization;

    public function viewAny(UserInterface $user): bool
    {
        return $user->hasPermissionTo('view wc rates') ? true : false;
    }

    public function view(UserInterface $user, WcRate $wcRate): bool
    {
        return $user->hasPermissionTo('view wc rates') ? true : false;
    }

    public function create(UserInterface $user): bool
    {
        return $user->hasPermissionTo('create wc rates') ? true : false;
    }

    public function update(UserInterface $user, WcRate $wcRate): bool
    {
        return $user->hasPermissionTo('update wc rates') ? true : false;
    }

    public function delete(UserInterface $user, WcRate $wcRate): bool
    {
        return $user->hasPermissionTo('delete wc rates') ? true : false;
    }

    public function restore(UserInterface $user, WcRate $wcRate): bool
    {
        return false;
    }

    public function forceDelete(UserInterface $user, WcRate $wcRate): bool
    {
        return false;
    }
}
