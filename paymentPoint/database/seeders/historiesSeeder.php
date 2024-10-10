<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Histories; 

class historiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $histories = [
            [
                'id' => 'H001',
                'email' => 'user1@example.com',
                'type' => 'Purchase',
                'price' => 100000,
                'status' => 'Completed',
                'paymentMethod' => 'Credit Card',
                'date' => now()->toDateString(),
                'refNo' => 'REF001',
            ],
            [
                'id' => 'H002',
                'email' => 'user2@example.com',
                'type' => 'Refund',
                'price' => 50000,
                'status' => 'Completed',
                'paymentMethod' => 'Bank Transfer',
                'date' => now()->subDays(1)->toDateString(),
                'refNo' => 'REF002',
            ],
            [
                'id' => 'H003',
                'email' => 'user3@example.com',
                'type' => 'Purchase',
                'price' => 150000,
                'status' => 'Pending',
                'paymentMethod' => 'PayPal',
                'date' => now()->subDays(2)->toDateString(),
                'refNo' => 'REF003',
            ],
            [
                'id' => 'H004',
                'email' => 'user4@example.com',
                'type' => 'Purchase',
                'price' => 250000,
                'status' => 'Completed',
                'paymentMethod' => 'Credit Card',
                'date' => now()->subDays(3)->toDateString(),
                'refNo' => 'REF004',
            ],
            
        ];

        foreach ($histories as $history) {
            histories::create($history);
        }
    }
}
