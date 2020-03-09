<?php

use Illuminate\Database\Seeder;

class CostumerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app('db')
        ->table('costumer')
        ->insert([
            'name' => 'Ade Rizki Wiranto',
            'phone' => '087774026625',
            'address' => 'Daenk Kos, Pasir Gn. Sel., Kec. Cimanggis, Kota Depok, Jawa Barat 16451'
        ]);

    }
}
