<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $unitId
 * @property string $name
 * @property string $description
 * @property boolean $status
 * @property string $created_at
 * @property string $uptadet_at
 * @property ProductUnit $productUnit
 * @property Product[] $products
 */
class ProductCategory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_category';

    /**
     * @var array
     */
    protected $fillable = ['unitId', 'name', 'description', 'status', 'created_at', 'uptadet_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productUnit()
    {
        return $this->belongsTo('App\ProductUnit', 'unitId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Product', 'categoryId');
    }
}
