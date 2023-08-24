<?php

namespace App\Action\Login;

use Illuminate\Support\Facades\Auth;

class LoginWithSystem
{
    protected $dto;

    public function __construct(array $dto)
    {
        $this->dto = $dto;
    }

    public function execute()
    {
        if (!Auth::attempt($this->dto)) {
            return (object) [
                'response_code' => 422,
                'success' => false,
                'message' => 'Unprocessable Entity',
                'data' => [],
            ];
        }

        return (object) [
            'response_code' => 200,
            'success' => true,
            'message' => 'User Successfully Authenticated',
            'data' => array_diff($this->dto, ['password']),
        ];

    }
}
