<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ConfigSite;
class ConfigSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConfigSite::create([
            'title' => 'Trading',
            'description' => 'Trading',
            'keywords' => 'Trading',
            'author' => 'Trading',
            'copyright' => 'Trading',
            'default_language' => 'en',
            'default_currency' => 'USD',
            'default_symbol_id' => 1,
        ]);
    }
}
