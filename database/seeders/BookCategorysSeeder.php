<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_categorys')->insert([
            [
                'Book_id'=>1,
                'Category_id'=>1
            ],
            [
                'Book_id'=>2,
                'Category_id'=>1
            ],
            [
                'Book_id'=>3,
                'Category_id'=>2
            ],
            [
                'Book_id'=>4,
                'Category_id'=>2
            ]
        ]);

    }
}
