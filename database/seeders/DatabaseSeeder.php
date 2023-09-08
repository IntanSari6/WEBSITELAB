<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\LoansLab;
use App\Models\InventoryLab;

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

        User::create([
            'name' => 'intan',
            'email' => 'intans@gmail.com',
            'password' => bcrypt('12345')
        ]);

        LoansLab::create([
            'nip_guru' => '0101',
            'nama_lab' => 'lab1',
            'kelas'=>'11 rpl',
            'mata_pelajaran'=>'pwpb',
            'tanggal'=>'2023-07-01',
            'durasi'=>'10.00-10.30',
            'lab'=>'1',
            'status_peminjaman'=>'diisi',
            'ulasan'=>'apa yaaaaaaaaaaaaa',
        ]);

        InventoryLab::create([
            'nama_lab'=>"lab 2",
            'nama_barang'=>"mouse",
            'kode_barang'=>"D001",
            'status'=>"rusak",
        ]);

    }

    
}
