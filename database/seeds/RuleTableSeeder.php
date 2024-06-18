<?php

use Illuminate\Database\Seeder;
use App\Gejala;
use App\Penyakit;
use App\Rule;

class RuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rule = array(
        	'1' => array(1, 2, 3, 4),
        	'2' => array(5, 6, 7, 8),
        	'3' => array(7, 9),
        	'4' => array(1, 5, 7, 10),
            '5' => array(5, 7, 11, 12, 13),
            '6' => array(7, 14, 15),
            '7' => array(16, 17)
        );
        
    	// foreach ($rule as $key => $array) {
    	// 	foreach ($array as $gejala) {
     //    		Rule::create([
     //    			'penyakit_id' => $key,
     //    			'gejala_id' => $gejala
     //    		]);
    	// 	}
    	// }

        foreach ($rule as $penyakit_id => $gejala) {
            $penyakit = Penyakit::find($penyakit_id);
            foreach ($gejala as $gejala_id) {
                $penyakit->attachGejala($gejala_id);
            }
        }
    }
}
