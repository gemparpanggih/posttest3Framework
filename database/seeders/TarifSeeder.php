<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TarifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tarif = [
            [
                'kodetarif' => 'lb1',
                'voltase' => '0-450 VA',
                'biaya/kWh' => '169',
            ],
            [
                'kodetarif' => 'lb2',
                'voltase' => '451-900 VA',
                'biaya/kWh' => '274',
            ],
            [
                'kodetarif' => 'lb3',
                'voltase' => '901-1300 VA',
                'biaya/kWh' => '1444',
            ],
            [
                'kodetarif' => 'lb4',
                'voltase' => '1.301-2.200 VA',
                'biaya/kWh' => '1444',
            ],
        ];
        foreach ($tarif as $trf){
            \App\Models\Tarif::firstOrCreate($trf);
        }
    }
}
