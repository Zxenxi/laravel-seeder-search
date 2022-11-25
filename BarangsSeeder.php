<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BarangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $barang = [
        [
            'kd_barang' => 'a0001',
            'nm_barang' => 'milo',
            'harga' => '29000',
            'qty' => '50'
        ],
        [
            'kd_barang' => 'a0002',
            'nm_barang' => 'dancow',
            'harga' => '32000',
            'qty' => '50'
        ],
        [
            'kd_barang' => 'a0003',
            'nm_barang' => 'rinso',
            'harga' => '49000',
            'qty' => '50'
        ],
        [
            'kd_barang' => 'a0004',
            'nm_barang' => 'sunlight',
            'harga' => '25000',
            'qty' => '50'
        ],
        [
            'kd_barang' => 'a0005',
            'nm_barang' => 'chetoz',
            'harga' => '5000',
            'qty' => '50'
        ],
    ];
    public function run()
    {
        //
        for ($i = 1; $i <= 5; $i++) {
            DB::table('barangs')->insert([
                'kd_barang' => $this->barang[$i]['kd_barang'],
                'nm_barang' => $this->barang[$i]['nm_barang'],
                'harga' => $this->barang[$i]['harga'],
                'qty' => $this->barang[$i]['qty'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}