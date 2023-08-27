<?php

namespace App\Action\ProductLink;

use App\Models\User;

class UpdateProductLink
{
    protected $dto;

    public function __construct(array $dto)
    {
        $this->dto = $dto;
    }

    public function execute()
    {
        $logged_user = User::with('productAffiliate')->where('id', $this->dto['member_id'])->where('role', 'member')->first();

        if (empty($logged_user)) {
            return (object) [
                'response_code' => 404,
                'success' => false,
                'message' => 'Member Not Found',
                'data' => [],
            ];
        }

        $logged_user->productAffiliate->where('id', $this->dto['product_link_id'])->first()->update([
            'product_id' => $this->dto['product_id'],
        ]);

        return (object) [
            'response_code' => 200,
            'success' => true,
            'message' => 'Link of Product Successfully Updated',
            'data' => $logged_user->productAffiliate,
        ];
    }
}
