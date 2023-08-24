<?php

namespace App\Action\ProductLink;

use App\Models\ProductAffiliate;
use App\Models\UserProductAffiliate;

class GenerateProductLink
{
    protected $dto;

    public function __construct(array $dto)
    {
        $this->dto = $dto;
    }

    public function execute()
    {
        $product_affiliate = ProductAffiliate::create($this->dto['product_affiliate']);

        $user_product_affiliate = UserProductAffiliate::create($this->dto['user_product_affiliate']);

        return (object) [
            'response_code' => 200,
            'success' => true,
            'message' => 'Link Generated Successfully',
            'data' => [
                'product_affiliate' => $product_affiliate,
                'user_product_affiliate' => $user_product_affiliate,
            ],
        ];
    }
}
