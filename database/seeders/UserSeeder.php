<?php

namespace Database\Seeders;

use App\Models\User;
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
            'firstname'   => 'Admin',
            'lastname'    => 'Cefmedics',
            'phonenumber' => '+2348035858071',
            'email'       => 'info@cefmedics.com',
            'password'    => Hash::make('admin001'),
            'user_type'   => 'admin',
        ];

        User::create($data);

        echo(
            '<< Admin user created successfully >>'
        );
    }
}
