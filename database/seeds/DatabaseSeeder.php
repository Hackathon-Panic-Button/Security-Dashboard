<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ClientSeeder::class);
        $this->call(ButtonSeeder::class);
        $this->call(NotificationSeeder::class);
    }
}
