<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Super Admin',
            'email' => 'sa@' . env('APP_MAIL') . '.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);
    }
}
