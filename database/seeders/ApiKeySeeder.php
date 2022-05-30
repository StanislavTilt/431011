<?php

namespace Database\Seeders;

use App\Models\ApiKey;
use Illuminate\Database\Seeder;

class ApiKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApiKey::create([
            'key' => 'test_api_key',
            'expires_at' => now()->addDays(1)
        ]);
    }
}
