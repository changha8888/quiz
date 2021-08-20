<?php

namespace App\Models\Traits\Scope;

/**
 * Class FacultyScope.
 */
trait FacultyScope
{
    /**
     * @param $query
     * @param $term
     *
     * @return mixed
     */
    public function scopeSearch($query, $term)
    {
        return $query->where(function ($query) use ($term) {
            $query->where('name', 'like', '%'.$term.'%')
            ->orWhere('code', 'like', '%'.$term.'%');
               
        });
    }
}
