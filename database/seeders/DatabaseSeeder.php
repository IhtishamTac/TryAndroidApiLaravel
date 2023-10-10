<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

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

        $p = new Product();
        $p->nama_produk = 'Kemeja Casual';
        $p->foto = 'https://down-id.img.susercontent.com/file/id-11134207-7qul4-lhomg23zckj43a';
        $p->deskripsi = 'Kemeja terbuat dari bahan katun, nyaman digunakan sehari-hari';
        $p->harga = '150000';
        $p->rating = 4.2;
        $p->save();
    }
}
