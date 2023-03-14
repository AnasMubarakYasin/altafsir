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
        $perencanaan = Kategory::where('name', 'perencanaan wilayah dan kota')->first();
        $tata = Kategory::where('name', 'tata ruang')->first();
        $lingkungan = Kategory::where('name', 'lingkungan pelestarian dan larangan berbuat kerusakan')->first();
        $pemukiman = Kategory::where('name', 'permukiman')->first();
        $pariwisata = Kategory::where('name', 'pariwisata')->first();
        $pembangunan = Kategory::where('name', 'pembangunan atau pengembangan wilayah')->first();
        $bencana = Kategory::where('name', 'bencana alam')->first();
        $sosial = Kategory::where('name', 'sosial')->first();
        $ekonomi = Kategory::where('name', 'ekonomi')->first();
        $prasarana = Kategory::where('name', 'prasarana wilayah')->first();
        $kesesuaian = Kategory::where('name', 'kesesuaian lahan')->first();

        Surah::where('number', 8)
            ->first()
            ->ayats()
            ->where('number', 60)
            ->first()
            ->fill(['kategorie_id' => $perencanaan->id])
            ->save();
        Surah::where('number', 51)
            ->first()
            ->ayats()
            ->where('number', 56)
            ->first()
            ->fill(['kategorie_id' => $perencanaan->id])
            ->save();
        Surah::where('number', 59)
            ->first()
            ->ayats()
            ->where('number', 18)
            ->first()
            ->fill(['kategorie_id' => $perencanaan->id])
            ->save();
        Surah::where('number', 6)
            ->first()
            ->ayats()
            ->where('number', 38)
            ->first()
            ->fill(['kategorie_id' => $perencanaan->id])
            ->save();
        Surah::where('number', 17)
            ->first()
            ->ayats()
            ->where('number', 36)
            ->first()
            ->fill(['kategorie_id' => $perencanaan->id])
            ->save();
        Surah::where('number', 12)
            ->first()
            ->ayats()
            ->where('number', 47)
            ->first()
            ->fill(['kategorie_id' => $perencanaan->id])
            ->save();
        Surah::where('number', 12)
            ->first()
            ->ayats()
            ->where('number', 48)
            ->first()
            ->fill(['kategorie_id' => $perencanaan->id])
            ->save();
        Surah::where('number', 12)
            ->first()
            ->ayats()
            ->where('number', 49)
            ->first()
            ->fill(['kategorie_id' => $perencanaan->id])
            ->save();
        Surah::where('number', 57)
            ->first()
            ->ayats()
            ->where('number', 22)
            ->first()
            ->fill(['kategorie_id' => $perencanaan->id])
            ->save();
        Surah::where('number', 94)
            ->first()
            ->ayats()
            ->where('number', 7)
            ->first()
            ->fill(['kategorie_id' => $perencanaan->id])
            ->save();
        Surah::where('number', 7)
            ->first()
            ->ayats()
            ->where('number', 172)
            ->first()
            ->fill(['kategorie_id' => $perencanaan->id])
            ->save();
        Surah::where('number', 2)
            ->first()
            ->ayats()
            ->where('number', 2)
            ->first()
            ->fill(['kategorie_id' => $perencanaan->id])
            ->save();
        Surah::where('number', 38)
            ->first()
            ->ayats()
            ->where('number', 27)
            ->first()
            ->fill(['kategorie_id' => $perencanaan->id])
            ->save();
        Surah::where('number', 35)
            ->first()
            ->ayats()
            ->where('number', 11)
            ->first()
            ->fill(['kategorie_id' => $perencanaan->id])
            ->save();
        Surah::where('number', 17)
            ->first()
            ->ayats()
            ->where('number', 11)
            ->first()
            ->fill(['kategorie_id' => $perencanaan->id])
            ->save();

        Surah::where('number', 62)
            ->first()
            ->ayats()
            ->where('number', 9)
            ->first()
            ->fill(['kategorie_id' => $tata->id])
            ->save();
        Surah::where('number', 62)
            ->first()
            ->ayats()
            ->where('number', 11)
            ->first()
            ->fill(['kategorie_id' => $tata->id])
            ->save();
        Surah::where('number', 22)
            ->first()
            ->ayats()
            ->where('number', 45)
            ->first()
            ->fill(['kategorie_id' => $tata->id])
            ->save();
        Surah::where('number', 13)
            ->first()
            ->ayats()
            ->where('number', 31)
            ->first()
            ->fill(['kategorie_id' => $tata->id])
            ->save();
        Surah::where('number', 78)
            ->first()
            ->ayats()
            ->where('number', 6)
            ->first()
            ->fill(['kategorie_id' => $tata->id])
            ->save();
        Surah::where('number', 78)
            ->first()
            ->ayats()
            ->where('number', 7)
            ->first()
            ->fill(['kategorie_id' => $tata->id])
            ->save();
        Surah::where('number', 78)
            ->first()
            ->ayats()
            ->where('number', 8)
            ->first()
            ->fill(['kategorie_id' => $tata->id])
            ->save();
        Surah::where('number', 78)
            ->first()
            ->ayats()
            ->where('number', 9)
            ->first()
            ->fill(['kategorie_id' => $tata->id])
            ->save();
        Surah::where('number', 78)
            ->first()
            ->ayats()
            ->where('number', 10)
            ->first()
            ->fill(['kategorie_id' => $tata->id])
            ->save();
        Surah::where('number', 78)
            ->first()
            ->ayats()
            ->where('number', 11)
            ->first()
            ->fill(['kategorie_id' => $tata->id])
            ->save();
        Surah::where('number', 78)
            ->first()
            ->ayats()
            ->where('number', 12)
            ->first()
            ->fill(['kategorie_id' => $tata->id])
            ->save();
        Surah::where('number', 78)
            ->first()
            ->ayats()
            ->where('number', 13)
            ->first()
            ->fill(['kategorie_id' => $tata->id])
            ->save();
        Surah::where('number', 78)
            ->first()
            ->ayats()
            ->where('number', 14)
            ->first()
            ->fill(['kategorie_id' => $tata->id])
            ->save();
        Surah::where('number', 78)
            ->first()
            ->ayats()
            ->where('number', 15)
            ->first()
            ->fill(['kategorie_id' => $tata->id])
            ->save();
        Surah::where('number', 78)
            ->first()
            ->ayats()
            ->where('number', 16)
            ->first()
            ->fill(['kategorie_id' => $tata->id])
            ->save();

        $lingkungan_surah = [7, 2, 2, 2, 2, 7, 28, 30, 30, 10, 2, 2, 26, 26, 5, 5, 2, 2, 2, 5, 7, 13, 11, 17];
        $lingkungan_ayat = [56, 11, 12, 30, 60, 74, 77, 41, 42, 41, 25, 27, 151, 152, 32, 33, 204, 205, 206, 64, 85, 25, 85, 7];
        foreach ($lingkungan_surah as $key => $item) {
            Surah::where('number', $item)
                ->first()
                ->ayats()
                ->where('number', $lingkungan_ayat[$key])
                ->first()
                ->fill(['kategorie_id' => $lingkungan->id])
                ->save();
        }

        $pemukiman_surah = [16, 16, 2, 2, 7, 7, 34, 33, 34, 51, 29, 7, 33, 33, 33, 8, 2, 59, 15, 17, 3, 27, 4, 24, 24, 24, 42, 66, 43, 10, 2, 2, 6, 10, 13, 14, 15, 15, 20, 43, 55, 77, 77];
        $pemukiman_ayat = [80, 81, 25, 22, 10, 24, 15, 16, 27, 36, 41, 74, 13, 33, 53, 5, 189, 2, 82, 93, 96, 52, 15, 27, 29, 61, 149, 11, 34, 87, 36, 29, 99, 5, 3, 32, 19, 20, 53, 11, 10, 25, 27];
        foreach ($pemukiman_surah as $key => $item) {
            $surah = Surah::where('number', $item)->first();
            if ($surah != null) {
                $ayat =  $surah->ayats()->where('number', $pemukiman_ayat[$key])->first();
                if ($ayat != null) {
                    $ayat->fill(['kategorie_id' => $pemukiman->id])->save();
                } else {
                    info("blammats", [$pemukiman_ayat[$key]]);
                }
            } else {
                info("blammats", [$item]);
            }
        }

        $pariwisata_surah = [27, 27, 27, 34, 3, 67, 67, 67, 29, 6, 16, 16, 16, 30, 30, 12, 47, 22, 3, 38, 31];
        $pariwisata_ayat = [59, 60, 69, 18, 100, 3, 4, 15, 20, 11, 5, 6, 14, 9, 42, 109, 10, 46, 137, 27, 31];
        foreach ($pariwisata_surah as $key => $item) {
            $surah = Surah::where('number', $item)->first();
            if ($surah != null) {
                $ayat =  $surah->ayats()->where('number', $pariwisata_ayat[$key])->first();
                if ($ayat != null) {
                    $ayat->fill(['kategorie_id' => $pariwisata->id])->save();
                } else {
                    info("blammats", [$pariwisata_ayat[$key]]);
                }
            } else {
                info("blammats", [$item]);
            }
        }

        $pembangunan_surah = [25, 49, 5, 18, 18, 13, 32, 95, 12, 17, 8, 16, 10, 2, 2, 11, 9];
        $pembangunan_ayat = [59, 13, 2, 84, 94, 11, 4, 4, 87, 84, 27, 90, 101, 219, 60, 61, 18];
        foreach ($pembangunan_surah as $key => $item) {
            $surah = Surah::where('number', $item)->first();
            if ($surah != null) {
                $ayat =  $surah->ayats()->where('number', $pembangunan_ayat[$key])->first();
                if ($ayat != null) {
                    $ayat->fill(['kategorie_id' => $pembangunan->id])->save();
                } else {
                    info("blammats", [$pembangunan_ayat[$key]]);
                }
            } else {
                info("blammats", [$item]);
            }
        }

        $bencana_surah = [7, 2, 2, 2, 2, 10, 34, 34, 17, 6, 57, 99, 99, 29, 7, 56, 67, 29, 41, 7, 26, 4, 64, 9, 28, 3, 5, 51, 15, 29, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 7, 7, 7, 7, 7, 7, 7, 7, 11, 67, 27, 82, 12, 8, 5, 5, 7];
        $bencana_ayat = [30, 155, 156, 157, 59, 44, 15, 16, 59, 65, 22, 1, 2, 37, 78, 4, 16, 40, 16, 130, 30, 79, 11, 50, 47, 165, 49, 41, 74, 14, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 65, 66, 67, 68, 69, 70, 71, 72, 101, 30, 88, 3, 48, 133, 33, 106, 91];
        foreach ($bencana_surah as $key => $item) {
            $surah = Surah::where('number', $item)->first();
            if ($surah != null) {
                $ayat =  $surah->ayats()->where('number', $bencana_ayat[$key])->first();
                if ($ayat != null) {
                    $ayat->fill(['kategorie_id' => $bencana->id])->save();
                } else {
                    info("blammats", [$bencana_ayat[$key]]);
                }
            } else {
                info("blammats", [$item]);
            }
        }

        $sosial_surah = [3, 18, 5, 17, 49, 49, 2, 3, 2, 103, 16, 3, 47, 49, 4, 4, 43, 3];
        $sosial_ayat = [110, 95, 2, 7, 3, 10, 213, 86, 267, 3, 90, 103, 23, 12, 1, 36, 32, 39];
        foreach ($sosial_surah as $key => $item) {
            $surah = Surah::where('number', $item)->first();
            if ($surah != null) {
                $ayat =  $surah->ayats()->where('number', $sosial_ayat[$key])->first();
                if ($ayat != null) {
                    $ayat->fill(['kategorie_id' => $sosial->id])->save();
                } else {
                    info("blammats", [$sosial_ayat[$key]]);
                }
            } else {
                info("blammats", [$item]);
            }
        }

        $ekonimi_surah = [51, 70, 70, 65, 9, 2, 92, 91, 91, 91, 106, 106, 106, 106, 4, 4, 78, 78, 25, 59, 3, 9, 9, 7, 2, 2, 17, 83, 83, 83, 83, 83, 83, 17];
        $ekonimi_ayat = [19, 24, 25, 7, 103, 279, 1, 2, 3, 4, 1, 2, 3, 4, 160, 161, 10, 11, 47, 7, 180, 34, 35, 31, 173, 264, 35, 1, 2, 3, 4, 5, 6, 12];
        foreach ($ekonimi_surah as $key => $item) {
            $surah = Surah::where('number', $item)->first();
            if ($surah != null) {
                $ayat =  $surah->ayats()->where('number', $ekonimi_ayat[$key])->first();
                if ($ayat != null) {
                    $ayat->fill(['kategorie_id' => $ekonomi->id])->save();
                } else {
                    info("blammats", [$ekonimi_ayat[$key]]);
                }
            } else {
                info("blammats", [$item]);
            }
        }

        $prasarana_surah = [38, 38, 31, 16, 16, 16, 25, 25, 25, 25, 16, 5, 2, 2, 2, 2, 16];
        $prasarana_ayat = [27, 28, 27, 68, 69, 15, 48, 49, 53, 67, 89, 62, 29, 267, 22, 29, 12];
        foreach ($prasarana_surah as $key => $item) {
            $surah = Surah::where('number', $item)->first();
            if ($surah != null) {
                $ayat =  $surah->ayats()->where('number', $prasarana_ayat[$key])->first();
                if ($ayat != null) {
                    $ayat->fill(['kategorie_id' => $prasarana->id])->save();
                } else {
                    info("blammats", [$prasarana_ayat[$key]]);
                }
            } else {
                info("blammats", [$item]);
            }
        }

        $kesesuaian_surah = [7, 55, 55, 55, 55, 55, 55, 23, 33, 2, 36, 36, 36, 18, 18, 18, 80, 80, 80, 80, 80, 80, 80, 80, 6, 13, 22, 7, 12, 31, 50];
        $kesesuaian_ayat = [58, 7, 8, 10, 11, 12, 13, 80, 72, 265, 33, 34, 35, 32, 33, 34, 25, 26, 27, 28, 29, 30, 31, 32, 141, 4, 5, 7, 47, 10, 9];
        foreach ($kesesuaian_surah as $key => $item) {
            $surah = Surah::where('number', $item)->first();
            if ($surah != null) {
                $ayat =  $surah->ayats()->where('number', $kesesuaian_ayat[$key])->first();
                if ($ayat != null) {
                    $ayat->fill(['kategorie_id' => $kesesuaian->id])->save();
                } else {
                    info("blammats", [$kesesuaian_ayat[$key]]);
                }
            } else {
                info("blammats", [$item]);
            }
        }
    }
}
