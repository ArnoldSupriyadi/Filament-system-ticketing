<?php

namespace App\Policies;

use App\Models\Label;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LabelPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissions('label_access');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Label $label): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Label $label): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Label $label): bool
    {
        //
    }

    public function deleteAny(User $user)
    {
        return $user->hasPermissions('category_delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Label $label): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Label $label): bool
    {
        //
    }
}
