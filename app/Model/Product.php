<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $categoryId
 * @property string $name
 * @property string $description
 * @property boolean $status
 * @property string $created_at
 * @property string $uptadet_at
 * @property ProductCategory $productCategory
 * @property ProductComentary[] $productComentaries
 * @property ProductImage[] $productImages
 */
class Product extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product';

    /**
     * @var array
     */
    protected $fillable = ['categoryId', 'name', 'description', 'status', 'created_at', 'uptadet_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCategory()
    {
        return $this->belongsTo('App\ProductCategory', 'categoryId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productComentaries()
    {
        return $this->hasMany('App\ProductComentary', 'productId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productImages()
    {
        return $this->hasMany('App\ProductImage', 'productId');
    }
}
