<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Ayat;
use App\Models\Kategory;
use App\Models\Surah;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'super',
            'email' => 'super@altafsir.ac.id',
            'password' => 'super',
        ]);

        \App\Models\Kategory::create([
            'name' => 'perencanaan wilayah dan kota',
        ]);
        \App\Models\Kategory::create([
            'name' => 'tata ruang',
        ]);
        \App\Models\Kategory::create([
            'name' => 'lingkungan pelestarian dan larangan berbuat kerusakan',
        ]);
        \App\Models\Kategory::create([
            'name' => 'permukiman',
        ]);
        \App\Models\Kategory::create([
            'name' => 'pariwisata',
        ]);
        \App\Models\Kategory::create([
            'name' => 'transportasi',
        ]);
        \App\Models\Kategory::create([
            'name' => 'pembangunan atau pengembangan wilayah',
        ]);
        \App\Models\Kategory::create([
            'name' => 'bencana alam',
        ]);
        \App\Models\Kategory::create([
            'name' => 'sosial',
        ]);
        \App\Models\Kategory::create([
            'name' => 'ekonomi',
        ]);
        \App\Models\Kategory::create([
            'name' => 'prasarana wilayah',
        ]);
        \App\Models\Kategory::create([
            'name' => 'kesesuaian lahan',
        ]);
    }
}
