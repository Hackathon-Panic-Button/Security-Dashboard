<?php

use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    public function run()
    {
				DB::table('notifications')->insert([
            'signed' => 0,
            'button_id' => 1,
						'created_at' => "2019-09-04 00:00:00"
				]);
		}
}
