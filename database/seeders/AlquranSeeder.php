<?php

namespace Database\Seeders;

use App\Models\Ayat;
use App\Models\Surah;
use App\Models\Tafsir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class AlquranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $api = Http::get('https://equran.id/api/v2/surat')->object();
        foreach ($api->data as $item) {
            $api_surah_ayat = $this->get_surah_ayat($item);
            $surah = Surah::factory()->create([
                'number' => $api_surah_ayat->data->nomor,
                'name_arab' => $api_surah_ayat->data->nama,
                'name_latin' => $api_surah_ayat->data->namaLatin,
                'name_id' => $api_surah_ayat->data->arti,
                'ayat_count' => $api_surah_ayat->data->jumlahAyat,
                'place' => $api_surah_ayat->data->tempatTurun,
                'description' => $api_surah_ayat->data->deskripsi,
            ]);
            $api_surah_tafsir = $this->get_surah_tafsir($item);
            $tafsirs = collect($api_surah_tafsir->data->tafsir);
            foreach ($api_surah_ayat->data->ayat as $key => $item) {
                $ayat = Ayat::factory()->create([
                    'number' => $item->nomorAyat,
                    'text_id' => $item->teksIndonesia,
                    'text_latin' => $item->teksLatin,
                    'text_arab' => $item->teksArab,
                    'audios' => $item->audio,
                    'surah_id' => $surah->id,
                ]);
                $tafsir = $tafsirs->sole('ayat', $ayat->number);
                Tafsir::factory()->create([
                    'number' => $tafsir->ayat,
                    'text' => $tafsir->teks,
                    'ayat_id' => $ayat->id,
                ]);
            }
        }
    }
    function get_surah_ayat($item)
    {
        try {
            sleep(1);
            return Http::get("https://equran.id/api/v2/surat/$item->nomor")->object();
        } catch (\Throwable $th) {
            info("fail seeder $item->nomor", [$th->getMessage()]);
            return $this->get_surah_ayat($item);
        } finally {
            info("success seed $item->nomor");
        }
    }
    function get_surah_tafsir($item)
    {
        try {
            sleep(1);
            return Http::get("https://equran.id/api/v2/tafsir/$item->nomor")->object();
        } catch (\Throwable $th) {
            info("fail seeder $item->nomor", [$th->getMessage()]);
            return $this->get_surah_ayat($item);
        } finally {
            info("success seed $item->nomor");
        }
    }
}
