<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HealthService;

class HealthServiceSeeder extends Seeder
{
    public function run()
    {
        HealthService::create([
            'name' => 'Rumah Sakit A',
            'category' => 'Rumah Sakit',
            'location' => 'Jakarta',
            'description' => 'Rumah sakit dengan fasilitas lengkap.',
        ]);

        HealthService::create([
            'name' => 'Klinik Sehat',
            'category' => 'Klinik',
            'location' => 'Bandung',
            'description' => 'Klinik dengan layanan 24 jam.',
        ]);

        HealthService::create([
            'name' => 'Puskesmas B',
            'category' => 'Puskesmas',
            'location' => 'Surabaya',
            'description' => 'Puskesmas dengan layanan kesehatan masyarakat.',
        ]);

        HealthService::create([
            'name' => 'Rumah Sakit C',
            'category' => 'Rumah Sakit',
            'location' => 'Medan',
            'description' => 'Rumah sakit dengan layanan spesialis.',
        ]);

        HealthService::create([
            'name' => 'Klinik Keluarga',
            'category' => 'Klinik',
            'location' => 'Makassar',
            'description' => 'Klinik dengan pelayanan dokter keluarga.',
        ]);

        HealthService::create([
            'name' => 'Puskesmas C',
            'category' => 'Puskesmas',
            'location' => 'Semarang',
            'description' => 'Puskesmas dengan layanan imunisasi.',
        ]);

        HealthService::create([
            'name' => 'Rumah Sakit D',
            'category' => 'Rumah Sakit',
            'location' => 'Yogyakarta',
            'description' => 'Rumah sakit dengan layanan darurat 24 jam.',
        ]);

        HealthService::create([
            'name' => 'Klinik Medis',
            'category' => 'Klinik',
            'location' => 'Bali',
            'description' => 'Klinik dengan layanan kesehatan umum.',
        ]);

        HealthService::create([
            'name' => 'Puskesmas D',
            'category' => 'Puskesmas',
            'location' => 'Balikpapan',
            'description' => 'Puskesmas dengan fasilitas kesehatan gigi.',
        ]);

        HealthService::create([
            'name' => 'Rumah Sakit E',
            'category' => 'Rumah Sakit',
            'location' => 'Palembang',
            'description' => 'Rumah sakit dengan layanan rawat inap dan rawat jalan.',
        ]);
    }
}
