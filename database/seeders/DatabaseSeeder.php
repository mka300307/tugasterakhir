<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Spesial;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Dokter::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         Spesial::create([
             'nama' => 'THT'
         ]);
         Spesial::create([
             'nama' => 'Bedah'
         ]);
        Spesial::create([
            'nama' => 'Gigi'
        ]);
        Spesial::create([
            'nama' => 'Anak'
        ]);
        Spesial::create([
            'nama' => 'Paru-paru'
        ]);
    }


}
