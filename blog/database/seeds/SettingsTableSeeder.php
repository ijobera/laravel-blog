<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "Laravel's Blog",
            'address' => 'Roxas City',
            'contact_email' => 'oberaij@gmail.com',
            'contact_number' => "111 222 333"
        ]);
    }
}
