<?php

namespace App\Action\ProductLink;

use App\Models\UserProductAffiliate;

class CreateUserProductAffiliate
{
    protected $dto;

    public function __construct(array $dto)
    {
        $this->dto = $dto;
    }

    public function execute()
    {
        $user_product_affiliate = UserProductAffiliate::create($this->dto);

        return (object) [
            'response_code' => 200,
            'success' => true,
            'message' => 'Product Affiliate Successfully Created',
            'data' => $user_product_affiliate,
        ];
    }
}
