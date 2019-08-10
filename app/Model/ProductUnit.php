<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property boolean $status
 * @property string $created_at
 * @property string $uptadet_at
 * @property ProductCategory[] $productCategories
 */
class ProductUnit extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_unit';

    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'status', 'created_at', 'uptadet_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productCategories()
    {
        return $this->hasMany('App\ProductCategory', 'unitId');
    }
}
