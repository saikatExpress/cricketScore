<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('12345');
        $now = Carbon::now();

        User::insert([
            [
                'id'           => 1,
                'name'         => 'Saikat Talukder',
                'phone_number' => '01713617913',
                'email'        => 'saikat@gmail.com',
                'password'     => $password,
                'created_at'   => $now
            ],
            [
                'id'           => 2,
                'name'         => 'Saibal Talukder',
                'phone_number' => '01600012582',
                'email'        => 'saibal@gmail.com',
                'password'     => $password,
                'created_at'   => $now
            ],
            [
                'id'           => 3,
                'name'         => 'Akash Talukder',
                'phone_number' => '01751810216',
                'email'        => 'akash@gmail.com',
                'password'     => $password,
                'created_at'   => $now
            ],
            [
                'id'           => 4,
                'name'         => 'Rajon Talukder',
                'phone_number' => '01752810216',
                'email'        => 'rajon@gmail.com',
                'password'     => $password,
                'created_at'   => $now
            ],
            [
                'id'           => 5,
                'name'         => 'Jusep Talukder',
                'phone_number' => '01751910216',
                'email'        => 'jusep@gmail.com',
                'password'     => $password,
                'created_at'   => $now
            ],
            [
                'id'           => 6,
                'name'         => 'Ripon Talukder',
                'phone_number' => '01651810216',
                'email'        => 'ripon@gmail.com',
                'password'     => $password,
                'created_at'   => $now
            ]
        ]);
    }
}
