<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['user_id' => 1, 'role_id' => 1, 'name' => 'Alexander', 'username' => 'alexander', 'email' => 'alexgaming2120@gmail.com', 'password' => Hash::make('Alex123')],
        ];
        DB::table('m_user')->insert($data);
    }
}
