<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserProductAffiliate extends Pivot
{
    use HasFactory;

    protected $guarded = ['id'];

    public function member(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function productAffiliate(): BelongsTo
    {
        return $this->belongsTo(ProductAffiliate::class, 'product_affiliate_id', 'id');
    }
}
