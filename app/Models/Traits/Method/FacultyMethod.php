<?php

namespace App\Models\Traits\Method;

use Illuminate\Support\Collection;

/**
 * Trait FacultyMethod.
 */
trait FacultyMethod
{
     /**
     * @return mixed
     */
    public function isAdmin(): bool
    {
        return $this->name === config('boilerplate.access.role.admin');
    }

    /**
     * @return Collection
     */
    public function getPermissionDescriptions(): Collection
    {
        return $this->permissions->pluck('description');
    }
}