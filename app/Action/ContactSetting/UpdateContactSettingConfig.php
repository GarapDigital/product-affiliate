<?php

namespace App\Action\ContactSetting;

use App\Models\SettingContact;

class UpdateContactSettingConfig
{
    protected $dto;

    public function __construct(array $dto)
    {
        $this->dto = $dto;
    }

    public function execute()
    {
        $setting_contact = SettingContact::where('id', $this->dto['setting_contact_id'])->first();

        if (empty($setting_contact)) {
            return (object) [
                'response_code' => 404,
                'success' => false,
                'message' => 'Contact Setting Not Found',
                'data' => [],
            ];
        }

        $setting_contact->update($this->dto);

        return (object) [
            'response_code' => 200,
            'success' => true,
            'message' => 'Contact Setting was Updated Successfully',
            'data' => $setting_contact,
        ];
    }
}
