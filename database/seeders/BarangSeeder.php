<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            "nama_barang" => "Something(1)",
            "harga" => 10000,
            "stock"  => 10,
            "id_supplier" => rand(1, 6)
        ]);

        DB::table('barang')->insert([
            "nama_barang" => "Something(2)",
            "harga" => 20000,
            "stock"  => 8,
            "id_supplier" => rand(1, 6)
        ]);

        DB::table('barang')->insert([
            "nama_barang" => "Something(3)",
            "harga" => 30000,
            "stock"  => 9,
            "id_supplier" => rand(1, 6)
        ]);
    }
}
