<?php

namespace App\Action\ProductLink;

use App\Models\ProductAffiliate;
use Illuminate\Support\Str;

class CreateProductAffiliate
{
    protected $dto;

    public function __construct(array $dto)
    {
        $this->dto = $dto;
    }

    public function execute()
    {
        $product_affiliate = ProductAffiliate::create([
            'product_id' => $this->dto['product_id'],
            'product_affiliate_link' => route('a.show-related-product-view', [
                'affiliate_code' => Str::random(6),
            ]),
        ]);

        return (object) [
            'response_code' => 200,
            'success' => true,
            'message' => 'Product Affiliate Successfully Created',
            'data' => $product_affiliate,
        ];
    }
}
