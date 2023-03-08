<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Kategory::factory()->create([
            'name' => 'perencanaan wilayah dan kota',
            'name' => 'tata ruang',
            'name' => 'lingkungan pelestarian dan larangan berbuat kerusakan',
            'name' => 'permukiman',
            'name' => 'pariwisata',
            'name' => 'pembangunan atau pengembangan wilayah',
            'name' => 'bencana alam',
            'name' => 'sosial',
            'name' => 'ekonomi',
            'name' => 'prasarana wilayah',
            'name' => 'kesesuaian lahan',
        ]);
    }
}
