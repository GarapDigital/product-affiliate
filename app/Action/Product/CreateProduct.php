<?php

namespace App\Action\Product;

use App\Models\Product;
use DayCod\StupImages\StupImages;

class CreateProduct
{
    protected $dto;

    public function __construct(array $dto)
    {
        $this->dto = $dto;
    }

    public function execute()
    {
        $this->dto['commission_percent'] = convertPercentToDouble($this->dto['commission_percent']);
        $this->dto['product_image'] = (new StupImages('product', 'product-image', 250, 200))->StupImagesToStorage($this->dto['product_image']);

        $product = Product::create($this->dto);

        return (object) [
            'response_code' => 200,
            'success' => true,
            'message' => 'Product Successfully Created',
            'data' => $product,
        ];
    }
}
