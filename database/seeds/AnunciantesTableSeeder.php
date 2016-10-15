<?php

use Illuminate\Database\Seeder;

class AnunciantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anunciantes')->insert([
            'nomefantasia' => 'porecatu supermercados',
            'cnpj' => '123456',
            'email' => 'pore@email.com',
            'password' => bcrypt('123'),
        ]);
    }
}
