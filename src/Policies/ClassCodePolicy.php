<?php

declare(strict_types=1);

namespace Roberts\WorkComp\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Roberts\WorkComp\Models\ClassCode;
use Tipoff\Support\Contracts\Models\UserInterface;

class RatePolicy
{
    use HandlesAuthorization;

    public function viewAny(UserInterface $user): bool
    {
        return $user->hasPermissionTo('view class codes') ? true : false;
    }

    public function view(UserInterface $user, ClassCode $classCode): bool
    {
        return $user->hasPermissionTo('view class codes') ? true : false;
    }

    public function create(UserInterface $user): bool
    {
        return $user->hasPermissionTo('create class codes') ? true : false;
    }

    public function update(UserInterface $user, ClassCode $classCode): bool
    {
        return $user->hasPermissionTo('update class codes') ? true : false;
    }

    public function delete(UserInterface $user, ClassCode $classCode): bool
    {
        return $user->hasPermissionTo('delete class codes') ? true : false;
    }

    public function restore(UserInterface $user, ClassCode $classCode): bool
    {
        return false;
    }

    public function forceDelete(UserInterface $user, ClassCode $classCode): bool
    {
        return false;
    }
}
