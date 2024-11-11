<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    public function run()
    {
        $cities = [
            'Delhi',
            'Mumbai',
            'Bengaluru',
            'Kolkata',
            'Chennai',
            'Hyderabad',
            'Jaipur',
            'Agra',
            'Udaipur',
            'Goa',
            'Varanasi',
            'Rishikesh',
            'Kerala',
            'Darjeeling',
            'Ladakh',
            'Andaman Islands',
            'Mysore',
            'Pune',
            'Ahmedabad',
            'Jodhpur',
            'Shimla',
            'Nainital',
            'Gangtok',
            'Coorg',
            'Khajuraho',
        ];

        foreach ($cities as $city) {
            City::create(['name' => $city]);
        }
    }
}
