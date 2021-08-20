<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use App\Models\Traits\Method\FacultyMethod;
use App\Models\Traits\Scope\FacultyScope;



/**
 * Class Faculty
 * @package App\Models
 * @version August 19, 2021, 7:27 am UTC
 *
 * @property t��ext $code
 * @property string $name
 * @property b��ool $status
 */
class Faculty extends Model
{
    use FacultyMethod,
    FacultyScope;

    public $table = 'faculties';
    



    public $fillable = [
        'code',
        'name',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => ['required', 'max:100', 'unique:faculties'],
        'code' => ['required', 'max:100', 'unique:faculties']
    ];

    
}
