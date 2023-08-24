<?php

namespace Database\Seeders;

use App\Models\SettingContact;
use Database\Factories\SettingContactFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SettingContact::create((new SettingContactFactory())->definition());
    }
}
