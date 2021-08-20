<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Week
 * @package App\Models
 * @version August 19, 2021, 6:46 am UTC
 *
 * @property string $name
 * @property string $start_date
 * @property string $end_date
 */
class Week extends Model
{


    public $table = 'weeks';
    



    public $fillable = [
        'name',
        'start_date',
        'end_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'true'
    ];

    
}
