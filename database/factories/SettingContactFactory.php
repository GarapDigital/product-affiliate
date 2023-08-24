<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SettingContact>
 */
class SettingContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email_subject_format' => 'Order Payment Follow Up - [Transaction Code]',
            'customer_service_email' => 'cs@azproduct.com',
            'company_email' => 'office@azproduct.com',
            'customer_service_whatsapp' => '+62 812 812 345',
        ];
    }
}
