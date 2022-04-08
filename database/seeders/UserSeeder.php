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
        $user1 = [
            "name"=> "Dimos Kasiouris",
            "email" => 'dkasiouris@aueb.gr',
            "username" => "p3312016",
            "password" => bcrypt("iamthefirstuser"),
            "description" => "Dimos's user",
        ];

        $user2 = [
            "name" => "An Admin",
            "email" => 'admin@aueb.gr',
            "username" => "admin",
            "password" => bcrypt("iamtheadmin"),
            "description" => "Admin's user",
        ];

        $sr = User::create($user1);
        $sr = User::create($user2);
    }
}
