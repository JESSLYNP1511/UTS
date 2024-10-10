<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserInformation; // Pastikan model ini sudah ada

class UserInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data dummy untuk seeder
        $userInformations = [
            [
                'id' => 'UI001',
                'nama' => 'John Doe',
                'email' => 'johndoe@example.com',
                'alamat' => '123 Main St, Cityville',
                'telp' => '081234567890',
            ],
            [
                'id' => 'UI002',
                'nama' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'alamat' => '456 Oak St, Townsville',
                'telp' => '082345678901',
            ],
            [
                'id' => 'UI003',
                'nama' => 'Alice Johnson',
                'email' => 'alicejohnson@example.com',
                'alamat' => '789 Pine St, Villageburg',
                'telp' => '083456789012',
            ],
            [
                'id' => 'UI004',
                'nama' => 'Bob Brown',
                'email' => 'bobbrown@example.com',
                'alamat' => '101 Maple St, Hamletville',
                'telp' => '084567890123',
            ],
          
        ];

        // Menyimpan semua data ke database
        foreach ($userInformations as $userInformation) {
            UserInformation::create($userInformation);
        }
    }
}
