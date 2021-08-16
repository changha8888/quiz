<?php

namespace App\Models\Traits\Method;

use Illuminate\Support\Collection;

/**
 * Trait SemesterMethod.
 */
trait SemesterMethod
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
