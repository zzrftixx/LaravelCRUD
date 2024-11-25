<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::create([
            'judul' => 'Bersikap Bodo Amat',
            'pengarang' => 'Mark Mason',
            'penerbit' => 'PT. Grammedia',
        ]);
    }
}
