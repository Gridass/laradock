<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        [
            'name' => 'Creator Unknown',
            'email' =>'creatorUn@gmail.com',
            'password' => bcrypt('12345678'), // password
            'remember_token' => Str::random(10),
        ],
        [
            'name' => 'Creator',
            'email' =>'creator@gmail.com',
            'password' => bcrypt('12345678'), // password
            'remember_token' => Str::random(8),
        ],
    ];
        DB::table('users')->insert($data);
    }
}
