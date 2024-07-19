<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //querry builder
use Illuminate\Support\Facades\Hash; //thêm thư viện hash
use App\Models\User;
class UsersSeeder extends Seeder
{
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => 'abc',
        //     'email' => 'abc@gmail.com',
        //     // 'password' => bcrypt('123456')
        //     'password' => Hash::make('123456'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        User::factory()->count(15)->create();
    }
}
