<?php

use Illuminate\Database\Seeder;
use App\Gejala;

class GejalaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gejala = array(
        	'Di stater listrik tidakbisa',
			'Klakson tidak bunyi',
			'Reating dan lampu tidak bekerja',
			'kelistrikan mati',
			'Stater manual sulit',
			'Suara knalpot meletus-letus',
			'Tarikan Berat',
			'Keluar asap kehitaman pada knalpot',
			'Mesin mudah panas',
			'Bahan bakar boros',
			'Bahan bakar boros',
			'Suara mesin kasar',
			'Kecepatan tidak optimal',
			'Bunyi kasar saat jalan pelan',
			'kampas kopling lambat',
			'Ketika ditarik mbrebet',
			'Tidak bisa hidup sama sekali'
        );

        foreach ($gejala as $name) {
        	Gejala::create([
        		'name' => $name
        	]);
        }
    }
}
