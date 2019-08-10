<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property UserModuleRol[] $userModuleRols
 */
class UserModule extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'user_module';

    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userModuleRols()
    {
        return $this->hasMany('App\UserModuleRol', 'moduleId');
    }
}
