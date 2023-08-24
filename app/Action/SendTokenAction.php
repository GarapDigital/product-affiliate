<?php

namespace App\Action;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SendTokenAction
{
    protected $dto;

    public function __construct(array $dto)
    {
        $this->dto = $dto;
    }

    public function execute()
    {
        $data = [
            'tokenable_type' => $this->dto['token_type'],
            'tokenable_id' => fake()->numberBetween(123123, 789789),
            'name' => $this->dto['token_name'],
            'token' => Str::random(64),
            'abilities' => $this->dto['token_abilities'],
        ];

        $personal_access_token = DB::table('personal_access_tokens')->insertGetId($data);
        $data['id'] = $personal_access_token;

        return (object) [
            'response_code' => 200,
            'success' => true,
            'message' => 'Personal Access Token Successfully Generated',
            'data' => $data,
        ];
    }
}
