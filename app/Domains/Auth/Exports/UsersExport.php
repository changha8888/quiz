<?php

namespace App\Domains\Auth\Exports;

use App\Domains\Auth\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    public function collection()
    {
        return User::all();
    }
}