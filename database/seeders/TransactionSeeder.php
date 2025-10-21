<?php

namespace Database\Seeders;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get users (both 'user' and 'customer' role)
        $customers = User::whereIn('role', ['user', 'customer'])->get();
        $books = Book::all();

        // Check if we have enough data
        if ($customers->count() < 2 || $books->count() < 5) {
            $this->command->warn('Not enough users or books to create transactions');
            $this->command->info("Users: {$customers->count()}, Books: {$books->count()}");
            return;
        }

        // Create 15 sample transactions
        $transactions = [
            [
                'order_number' => 'ORD-20251021-A1B2C3',
                'customer_id' => $customers->get(0)->id,
                'book_id' => $books->get(0)->id,
                'total_amount' => 150000.00,
            ],
            [
                'order_number' => 'ORD-20251021-D4E5F6',
                'customer_id' => $customers->get(1)->id,
                'book_id' => $books->get(1)->id,
                'total_amount' => 125000.00,
            ],
            [
                'order_number' => 'ORD-20251021-G7H8I9',
                'customer_id' => $customers->get(0)->id,
                'book_id' => $books->get(2)->id,
                'total_amount' => 200000.00,
            ],
            [
                'order_number' => 'ORD-20251020-J1K2L3',
                'customer_id' => $customers->get(1)->id,
                'book_id' => $books->get(3)->id,
                'total_amount' => 175000.00,
            ],
            [
                'order_number' => 'ORD-20251020-M4N5O6',
                'customer_id' => $customers->get(0)->id,
                'book_id' => $books->get(4)->id,
                'total_amount' => 95000.00,
            ],
            [
                'order_number' => 'ORD-20251019-P7Q8R9',
                'customer_id' => $customers->get(1)->id,
                'book_id' => $books->get(0)->id,
                'total_amount' => 180000.00,
            ],
            [
                'order_number' => 'ORD-20251019-S1T2U3',
                'customer_id' => $customers->get(0)->id,
                'book_id' => $books->get(1)->id,
                'total_amount' => 220000.00,
            ],
            [
                'order_number' => 'ORD-20251018-V4W5X6',
                'customer_id' => $customers->get(1)->id,
                'book_id' => $books->get(2)->id,
                'total_amount' => 160000.00,
            ],
            [
                'order_number' => 'ORD-20251018-Y7Z8A9',
                'customer_id' => $customers->get(0)->id,
                'book_id' => $books->get(3)->id,
                'total_amount' => 140000.00,
            ],
            [
                'order_number' => 'ORD-20251017-B1C2D3',
                'customer_id' => $customers->get(1)->id,
                'book_id' => $books->get(4)->id,
                'total_amount' => 190000.00,
            ],
            [
                'order_number' => 'ORD-20251017-E4F5G6',
                'customer_id' => $customers->get(0)->id,
                'book_id' => $books->get(0)->id,
                'total_amount' => 150000.00,
            ],
            [
                'order_number' => 'ORD-20251016-H7I8J9',
                'customer_id' => $customers->get(1)->id,
                'book_id' => $books->get(1)->id,
                'total_amount' => 125000.00,
            ],
            [
                'order_number' => 'ORD-20251016-K1L2M3',
                'customer_id' => $customers->get(0)->id,
                'book_id' => $books->get(2)->id,
                'total_amount' => 200000.00,
            ],
            [
                'order_number' => 'ORD-20251015-N4O5P6',
                'customer_id' => $customers->get(1)->id,
                'book_id' => $books->get(3)->id,
                'total_amount' => 175000.00,
            ],
            [
                'order_number' => 'ORD-20251015-Q7R8S9',
                'customer_id' => $customers->get(0)->id,
                'book_id' => $books->get(4)->id,
                'total_amount' => 95000.00,
            ],
        ];

        foreach ($transactions as $transaction) {
            Transaction::create($transaction);
        }

        $this->command->info('Berhasil membuat 15 data transaksi sampel.');
    }
}
