<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Ayat;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        function get_surah($item)
        {
            try {
                sleep(1);
                return Http::get("https://equran.id/api/v2/surat/$item->nomor")->object();
            } catch (\Throwable $th) {
                info("fail seeder $item->nomor", [$th->getMessage()]);
                return get_surah($item);
            } finally {
                info("success seed $item->nomor");
            }
        }
        $api = Http::get('https://equran.id/api/v2/surat')->object();
        foreach ($api->data as $item) {
            $api = get_surah($item);
            $surah = Surah::factory()->create([
                'number' => $api->data->nomor,
                'name_arab' => $api->data->nama,
                'name_latin' => $api->data->namaLatin,
                'ayat_count' => $api->data->jumlahAyat,
                'place' => $api->data->tempatTurun,
                'translate' => $api->data->arti,
                'description' => $api->data->deskripsi,
            ]);
            foreach ($api->data->ayat as $ayat) {
                Ayat::factory()->create([
                    'number' => $ayat->nomorAyat,
                    'text_id' => $ayat->teksIndonesia,
                    'text_latin' => $ayat->teksLatin,
                    'text_arab' => $ayat->teksArab,
                    'audios' => $ayat->audio,
                    'surah_id' => $surah->id,
                ]);
            }
        }
    }
}
