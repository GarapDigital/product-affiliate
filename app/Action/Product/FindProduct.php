<?php

namespace App\Action\Product;

use App\Models\Product;

class FindProduct
{
    protected $dto;

    public function __construct(array $dto)
    {
        $this->dto = $dto;
    }

    public function execute()
    {
        $product = Product::where('id', $this->dto['product_id'])->first();

        if (empty($product)) {
            return (object) [
                'response_code' => 404,
                'success' => false,
                'message' => 'Product Not Found',
                'data' => [],
            ];
        }

        return (object) [
            'response_code' => 200,
            'success' => true,
            'message' => 'Product Found',
            'data' => $product,
        ];
    }
}
