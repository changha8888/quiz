<?php

namespace App\Repositories;

use App\Models\Week;
use App\Repositories\BaseRepository;

/**
 * Class WeekRepository
 * @package App\Repositories
 * @version August 19, 2021, 6:46 am UTC
*/

class WeekRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'start_date',
        'end_date'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Week::class;
    }
}
