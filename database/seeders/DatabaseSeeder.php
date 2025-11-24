<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Tambah data sekolah dulu
        $schoolId = DB::table('school')->insertGetId([
            'name' => 'SMPN 23 Malang',
            'subdomain' => 'smpn23',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Baru buat admin dengan school_id valid
        admin::create([
            'username'   => 'admin',
            'password'   => bcrypt('admin'),
            'school_id'  => $schoolId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
