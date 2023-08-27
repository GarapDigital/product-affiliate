<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProductAffiliate extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function member(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_product_affiliates', 'product_affiliate_id', 'user_id')
            ->using(UserProductAffiliate::class)
            ->withTimestamps();
    }
}
