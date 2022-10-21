<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelanggan = [
            [
                // 'id' => '1',
                'username' => 'gempar',
                'password' => 'panggih',
                'nometer' => '5678',
                'nama' => 'Gempar Panggih Dwi Putra',
                'tarif_id' => '1',
                'alamat' => 'Jln. Sultan Sulaiman',
            ],
            [
                'username' => 'yanuar',
                'password' => 'satria',
                'nometer' => '5679',
                'nama' => 'Acun, Lord of Chaos',
                'tarif_id' => '2',
                'alamat' => 'Jln. Go to Sage Realms',
            ],
            [
                'username' => 'acul',
                'password' => 'satria',
                'nometer' => '5679',
                'nama' => 'Acun, Lord of Void',
                'tarif_id' => '2',
                'alamat' => 'Jln. Go to Kripton',
            ],
            [
                'username' => 'daffa',
                'password' => 'satria',
                'nometer' => '5679',
                'nama' => 'Acun, Lord of Ice',
                'tarif_id' => '2',
                'alamat' => 'Jln. Go to Sage Super',
            ],
            [
                'username' => 'risky',
                'password' => 'satria',
                'nometer' => '5679',
                'nama' => 'Acun, Lord of Flame',
                'tarif_id' => '2',
                'alamat' => 'Jln. Go to Sage Kipak',
            ],
        ];

        foreach ($pelanggan as $plg){
            \App\Models\Pelanggan::firstOrCreate($plg);
        }
    }
}
