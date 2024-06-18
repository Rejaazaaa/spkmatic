<?php

use Illuminate\Database\Seeder;
use App\Penyakit;

class PenyakitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$penyakit = array(
            'Masalah pada Acu',
            'Masalah pada Busi',
            'Masalah pada Celah Klep',
            'Masalah pada Injector',
            'Masalah pada Roller',
            'Masalah pada CVT',
            'Masalah pada ECM'
        );

        foreach ($penyakit as $nama) {
	        Penyakit::create([
	        	'nama' => $nama,
                'penyebab' => 'virus'
	        ]);	
        }
    }
}
