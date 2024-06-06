<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*DB::table('clients')->insert([
            'clientName' => Str::random(100),
            'phone' => Str::random(25),
            'email' => Str::random(100).'@example.com',
            'website' => Str::random(100),
            'city' => Str::random(30),
            'address' => Str::random(100),
        ]);*/

        Client::factory()->count(50)->create();

    }
}
