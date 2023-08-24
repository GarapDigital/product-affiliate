<?php

namespace Database\Seeders;

use App\Models\Lead;
use Database\Factories\LeadFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factories = (new LeadFactory())->definition();
        foreach($factories as $factory) {
            Lead::create([
                'name' => $factory->name,
                'email' => $factory->email,
                'phone_number' => $factory->phone_number,
            ]);
        }
    }
}
