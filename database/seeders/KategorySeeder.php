<?php

namespace Database\Seeders;

use App\Models\Ayat;
use App\Models\Kategory;
use App\Models\Surah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Ayat::query()->update(['kategorie_id' => null]);

        $perencanaan = \App\Models\Kategory::where(
            'name',
            'perencanaan wilayah dan kota'
        )->first();
        $tata = \App\Models\Kategory::where(
            'name',
            'tata ruang'
        )->first();
        $lingkungan = \App\Models\Kategory::where(
            'name',
            'lingkungan pelestarian dan larangan berbuat kerusakan'
        )->first();
        $pemukiman = \App\Models\Kategory::where(
            'name',
            'permukiman'
        )->first();
        $pariwisata = \App\Models\Kategory::where(
            'name',
            'pariwisata'
        )->first();
        $transportasi = \App\Models\Kategory::where(
            'name',
            'transportasi'
        )->first();
        $pembangunan = \App\Models\Kategory::where(
            'name',
            'pembangunan atau pengembangan wilayah'
        )->first();
        $bencana = \App\Models\Kategory::where(
            'name',
            'bencana alam'
        )->first();
        $sosial = \App\Models\Kategory::where(
            'name',
            'sosial'
        )->first();
        $ekonomi = \App\Models\Kategory::where(
            'name',
            'ekonomi'
        )->first();
        $prasarana = \App\Models\Kategory::where(
            'name',
            'prasarana wilayah'
        )->first();
        $kesesuaian = \App\Models\Kategory::where(
            'name',
            'kesesuaian lahan'
        )->first();

        $this->seed_kategory(
            [
                27 => [59, 60, 69],
                34 => [18],
                4 => [100],
                67 => [3, 4, 15],
                29 => [20],
                6 => [11],
                16 => [5, 6, 14],
                30 => [9, 42],
                12 => [109],
                47 => [10],
                22 => [46],
                3 => [137],
                38 => [27],
                31 => [3],
            ],
            $pariwisata,
        );
        $this->seed_kategory(
            [
                7 => [96],
                22 => [65],
                16 => [8],
                17 => [70],
                36 => [41, 42],
                22 => [65],
                31 => [31],
                67 => [19],
                11 => [14],
                29 => [65],
                18 => [71],
                2 => [164, 238, 239],
                43 => [12, 13],
                105 => [3, 5],
            ],
            $transportasi,
        );
        $this->seed_kategory(
            [
                7 => [
                    9,
                    30,
                    65,
                    66,
                    67,
                    68,
                    69,
                    70,
                    71,
                    72,
                    78,
                    130,
                ],
                2 => [
                    59,
                    155,
                    156,
                    157,
                ],
                10 => [
                    44,
                ],
                34 => [
                    15,
                    16,
                ],
                17 => [
                    59,
                ],
                6 => [
                    65,
                ],
                57 => [
                    22,
                ],
                99 => [
                    1,
                    2,
                ],
                29 => [
                    14,
                    37,
                    40,
                ],
                56 => [
                    4,
                ],
                67 => [
                    16,
                    30,
                ],
                41 => [
                    16,
                ],
                26 => [
                    30,
                ],
                4 => [
                    79,
                ],
                64 => [
                    11,
                ],
                9 => [
                    50,
                ],
                28 => [
                    47,
                ],
                3 => [
                    165,
                ],
                5 => [
                    33,
                    49,
                    106,
                ],
                51 => [
                    41,
                ],
                15 => [
                    74,
                ],
                11 => [
                    32,
                    33,
                    34,
                    35,
                    36,
                    37,
                    38,
                    39,
                    40,
                    41,
                    42,
                    43,
                    44,
                    45,
                    46,
                    47,
                    48,
                    49,
                    101,
                ],
                27 => [
                    88,
                ],
                82 => [
                    3,
                ],
                12 => [
                    48,
                ],
                8 => [
                    133,
                ],
            ],
            $bencana,
        );
        $this->seed_kategory(
            [
                3 => [
                    39,
                    86,
                    103,
                    110,
                ],
                18 => [
                    95,
                ],
                5 => [
                    2,
                ],
                17 => [
                    7,
                ],
                49 => [
                    3,
                    10,
                    12,
                ],
                2 => [
                    213,
                    267,
                ],
                103 => [
                    3,
                ],
                16 => [
                    90,
                ],
                47 => [
                    23,
                ],
                4 => [
                    1,
                    36,
                ],
                43 => [
                    32,
                ],
            ],
            $sosial,
        );
        $this->seed_kategory(
            [
                51 => [
                    19,
                ],
                70 => [
                    24,
                    25,
                ],
                65 => [
                    7,
                ],
                9 => [
                    34,
                    35,
                    103,
                ],
                2 => [
                    173,
                    264,
                    279,
                ],
                92 => [
                    1,
                ],
                91 => [
                    2,
                    3,
                    4,
                ],
                106 => [
                    1,
                    2,
                    3,
                    4,
                ],
                4 => [
                    160,
                    161,
                ],
                78 => [
                    10,
                    11,
                ],
                25 => [
                    47,
                ],
                59 => [
                    7,
                ],
                3 => [
                    180,
                ],
                7 => [
                    31,
                ],
                17 => [
                    12,
                    35,
                ],
                83 => [
                    1,
                    2,
                    3,
                    4,
                    5,
                    6,
                ],
            ],
            $ekonomi,
        );
        $this->seed_kategory(
            [
                38 => [
                  27,
                  28,
                ],
                31 => [
                  27,
                ],
                16 => [
                  12,
                  15,
                  68,
                  69,
                  89,
                ],
                25 => [
                  48,
                  49,
                  53,
                  67,
                ],
                5 => [
                  62,
                ],
                2 => [
                  22,
                  29,
                  29,
                  267,
                ],
            ],
            $prasarana,            
        );

        // $reduced = array_reduce($array, function ($acc, $value) {
        //     if (isset($acc[array_key_first($value)])) {
        //         array_push($acc[array_key_first($value)], $value[array_key_first($value)]);
        //         sort($acc[array_key_first($value)]);
        //     } else {
        //         $acc[array_key_first($value)] = [$value[array_key_first($value)]];
        //     }
        //     return $acc;
        // }, []);
    }
    private function seed_kategory($list, $model)
    {
        foreach ($list as $surah => $ayats) {
            $m_surah = Surah::where('number', $surah)->first();
            if ($m_surah != null) {
                foreach ($ayats as $ayat) {
                    $m_ayat =  $m_surah->ayats()->where('number', $ayat)->first();
                    if ($m_ayat != null) {
                        $m_ayat->kategories()->attach($model->id);
                        // $m_ayat->fill(['kategorie_id' => $model->id])->save();
                    } else {
                        logger("error", [$surah, $ayat]);
                    }
                }
            } else {
                logger("error", [$surah]);
            }
        }
    }
}
