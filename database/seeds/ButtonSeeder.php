<?php

use Illuminate\Database\Seeder;

class ButtonSeeder extends Seeder
{
    public function run()
    {
			  DB::table('buttons')->insert([
						'id' => 1,
            'location' => "Toonbank",
						'locked' => 0,
            'hardwareId' => "C4AF",
            'client_id' => 1,
        ]);

				DB::table('buttons')->insert([
						'id' => 2,
						'locked' => 0,
            'location' => "Huiskamer",
            'hardwareId' => "AAAB",
            'client_id' => 2,
        ]);
    }
}
