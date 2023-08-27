<?php

namespace App\Action\ProductLink;

use App\Models\User;
use Illuminate\Support\Str;

class GenerateProductLink
{
    protected $dto;

    public function __construct(array $dto)
    {
        $this->dto = $dto;
    }

    public function execute()
    {
        $logged_member = User::with('productAffiliate')->where('id', $this->dto['member_id'])->where('role', 'member')->first();

        if (empty($logged_member)) {
            return (object) [
                'response_code' => 404,
                'success' => false,
                'message' => 'Member Not Found',
                'data' => [],
            ];
        }

        $logged_member->productAffiliate()->create([
            'product_id' => $this->dto['product_id'],
            'product_affiliate_link' => route('a.show-related-product-view', [
                'affiliate_code' => Str::random(6),
            ]),
        ]);

        return (object) [
            'response_code' => 200,
            'success' => true,
            'message' => 'Link of Product Successfully Generated',
            'data' => $logged_member->productAffiliate,
        ];
    }
}
