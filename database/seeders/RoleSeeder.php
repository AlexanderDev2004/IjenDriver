<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['role_id' => 1, 'role_kode' => 'ADM', 'role_nama' => 'Admin' ]
        ];

        DB::table('m_roles')->insert($data);
    }
}
