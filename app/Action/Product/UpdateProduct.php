<?php

namespace App\Action\Product;

use App\Models\Product;
use DayCod\StupImages\StupImages;

class UpdateProduct
{
    protected $dto;

    public function __construct(array $dto)
    {
        $this->dto = $dto;
    }

    public function execute()
    {
        $find_product = (new FindProduct(['product_id' => $this->dto['product_id']]))->execute();
        if (!$find_product->success) {
            return (object) [
                'response_code' => $find_product->response_code,
                'success' => $find_product->success,
                'message' => $find_product->message,
                'data' => $find_product->data,
            ];
        }

        $this->dto['commission_percent'] = convertPercentToDouble($this->dto['commission_percent']);
        $this->dto['product_image'] = (is_null($this->dto['product_image']))
                ? $find_product->data->product_image
                : (new StupImages('product', 'product-image', 300, 300))->StupImagesToStorage($this->dto['product_image'], $find_product->data->product_image);

        $product = Product::where('id', $this->dto['product_id'])->first();
        $product->update($this->dto);

        return (object) [
            'response_code' => 200,
            'success' => true,
            'message' => 'Product Successfully Updated',
            'data' => $find_product,
        ];
    }
}
