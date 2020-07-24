<?php

use Illuminate\Database\Seeder;

class sewa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $batas = 5;
        for ($i=0; $i < $batas ; $i++) { 
            DB::table('penyewaans')->insert([
                'tanggal_sewa' => Str::random(10),
                'harga_sewa' => Str::random(20),
                'lama_sewa' => Str::random(15),
                'hp_sewa' => Str::random(8),
                'alamat_sewa' => Str::random(5),  ]);
        }
    }
}
