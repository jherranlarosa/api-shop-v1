<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $productId
 * @property string $name
 * @property string $description
 * @property boolean $status
 * @property string $created_at
 * @property string $uptadet_at
 * @property Product $product
 */
class ProductComentary extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_comentary';

    /**
     * @var array
     */
    protected $fillable = ['productId', 'name', 'description', 'status', 'created_at', 'uptadet_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Product', 'productId');
    }
}
