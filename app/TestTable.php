<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $name
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 */
class TestTable extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'test_table';

    /**
     * @var array
     */
    protected $fillable = ['name', 'status', 'created_at', 'updated_at'];

}
