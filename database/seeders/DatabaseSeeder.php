<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Admin;
use App\Models\SuperAdmin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt(12345678),
            'level' => '1',
            'status_aktif' => '1',
        ]);

        User::create([
            'email' => 'admin@gmail.com',
            'password' => bcrypt(12345678),
            'level' => '2',
            'status_aktif' => '1',
        ]);

        SuperAdmin::create([
            'user_id' => '1',
            'nama_panjang' => 'Angga',
            'tanggal_lahir' => '1999-12-26',
            'alamat' => 'Jakarta',
            'no_hp' => '12345678',
        ]);

        Admin::create([
            'user_id' => '2',
            'nama_panjang' => 'Angga',
            'tanggal_lahir' => '1999-12-26',
            'alamat' => 'Jakarta',
            'no_hp' => '12345678',
        ]);
    }
}
