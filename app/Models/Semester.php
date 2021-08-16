<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use App\Models\Traits\Method\SemesterMethod;
use App\Domains\Auth\Models\Traits\Scope\SemesterScope;



/**
 * Class Semester
 * @package App\Models
 * @version August 16, 2021, 2:13 am UTC
 *
 * @property string $name
 */
 
class Semester extends Model
{

    use SemesterScope,
        SemesterMethod;

    public $table = 'semesters';
    



    public $fillable = [
        'name'
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
        'name' => ['required', 'max:100', 'unique:semesters']
    ];

    
}
