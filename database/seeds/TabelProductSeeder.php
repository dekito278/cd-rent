<?php

use Illuminate\Database\Seeder;

class TabelProductSeeder extends Seeder
{
    /**
     * Run the database cd_rent.
     *
     * @return void
     */
    public function run()
    {
        app('db')
            ->table('products_cd')
            ->insert([
                'title' => 'Dark joke',
                'rate' => '2000',
                'category' => 'comedy',
                'quantity' => 1
            ]);
       
            
        app('db')
            ->table('products_cd')
            ->insert([
                'title' => 'Word of goverment',
                'rate' => '2000',
                'category' => 'Comedy',
                'quantity' => 1
            ]);

        app('db')
            ->table('products_cd')
            ->insert([
                'title' => 'Wanna Be You Anymore',
                'rate' => '3000',
                'category' => 'Music',
                'quantity' => 9
            ]);

         app('db')
            ->table('products_cd')
            ->insert([
                'title' => 'Disco Retro',
                'rate' => '9050',
                'category' => 'Music',
                'quantity' => 4
            ]);

    }
}
