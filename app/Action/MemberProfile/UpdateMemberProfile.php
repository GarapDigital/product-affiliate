<?php

namespace App\Action\MemberProfile;

use App\Models\User;
use App\Models\UserProfile;

class UpdateMemberProfile
{
    protected $dto;

    public function __construct(array $dto)
    {
        $this->dto = $dto;
    }

    public function execute()
    {
        $logged_member = User::with('userProfile')->where('id', $this->dto['authenticated_member_id'])->where('role', 'member')->first();

        if (empty($logged_member)) {
            return (object) [
                'response_code' => 404,
                'success' => false,
                'message' => 'Member Not Found',
                'data' => [],
            ];
        }

        $logged_member->update([
            'name' => $this->dto['name'],
            'email' => $this->dto['email'],
            'phone_number' => $this->dto['phone_number'],
            'password' => $this->dto['new_password'],
        ]);

        if (is_null($logged_member->userProfile)) {
            $logged_member->userProfile()->create([
                'user_id' => $logged_member->id,
                'bank' => $this->dto['bank'],
                'bank_account_number' => $this->dto['bank_account_number'],
            ]);
        } else {
            $logged_member->userProfile()->update([
                'bank' => $this->dto['bank'],
                'bank_account_number' => $this->dto['bank_account_number'],
            ]);
        }

        return (object) [
            'response_code' => 200,
            'success' => true,
            'message' => 'Member Successfully Updated',
            'data' => $this->dto,
        ];

    }
}
