<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run()
    {
				DB::table('clients')->insert([
            'id' => 1,
            'name' => "Rabobank",
            'address' => "Wibautstraat 451",
        ]);

				DB::table('clients')->insert([
            'id' => 2,
            'name' => "Fortis",
            'address' => "Weesperplein 22",
        ]);

    }
}
