<?php

namespace App\Policies;

use App\Models\Categoryyy;
use App\Models\User;

class CategoryyyPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Example logic: Allow all users to view categories
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Categoryyy $categoryyy): bool
    {
        // Example logic: Allow users to view categories if they are the owner or if they are an admin
        return $user->id === $categoryyy->user_id || $user->is_admin;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Example logic: Allow any authenticated user to create a category
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Categoryyy $categoryyy): bool
    {
        // Example logic: Allow users to update their own categories
        return $user->id === $categoryyy->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Categoryyy $categoryyy): bool
    {
        // Example logic: Allow users to delete their own categories
        return $user->id === $categoryyy->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Categoryyy $categoryyy): bool
    {
        // Example logic: Allow users to restore their own categories
        return $user->id === $categoryyy->user_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Categoryyy $categoryyy): bool
    {
        // Example logic: Allow users to permanently delete their own categories
        return $user->id === $categoryyy->user_id;
    }
}
