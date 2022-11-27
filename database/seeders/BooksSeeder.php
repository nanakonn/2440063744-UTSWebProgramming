<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'Publisher_id'=>1,
                'Title'=>'Cinta Brontosaurus',
                'Author'=>'Raditya Dika',
                'Year'=>2006,
                'Synopsis'=>'Dika (Raditya Dika) adalah seorang penulis yang baru saja putus cinta dengan Nina (Pamela Bowie), pacarnya setelah sekian lama. Semenjak putus cinta ini, dia percaya bahwa cinta bisa kedaluwarsa.',
                'Image'=>'https://www.bukukita.com/babacms/displaybuku/101535_f.jpg'
            ],
            [
                'Publisher_id'=>1,
                'Title'=>'Jomblo',
                'Author'=>'Adhitya Mulya',
                'Year'=>2013,
                'Synopsis'=>'Empat sahabat dengan masalah mereka dalam mencari cinta. Yang satu harus memilih—seorang yang baik atau yang cocok.Yang satu harus memilih—antara seorang perempuan atau sahabat',
                'Image'=>'https://www.ikurniawan.com/wp-content/uploads/2014/11/Review-Buku-Jomblo-Adhitya-Mulya.jpg'
            ],
            [
                'Publisher_id'=>2,
                'Title'=>'Bumi',
                'Author'=>'Tere Liye',
                'Year'=>2014,
                'Synopsis'=>' Novel ini mengisahkan tentang petualangan 3 remaja yang berusia 15 tahun bernama Raib, Ali dan Seli. Namun mereka bukanlah remaja biasa, melainkan remaja yang memiliki kekuatan khusus seperti Raib.',
                'Image'=>'https://cdn.gramedia.com/uploads/items/9786020332956_Bumi-New-Cover.jpg '
            ],
            [
                'Publisher_id'=>2,
                'Title'=>'Dignitate',
                'Author'=>'Hana Margaretha',
                'Year'=>2017,
                'Synopsis'=>'Novel ini menceritakan tentang perjalanan cinta Alfi dan Alana. Alfi yang dikenal sebagai laki-laki genius, dingin, dan tampan yang tidak satupun perempuan bisa mendekatinya. Saat Alfi bertemu dengan Alana.',
                'Image'=>'https://bebaspedia.com/wp-content/uploads/2019/12/Dignitate-Hana-Margaretha-546x800.jpg '
            ]
        ]);

    }
}
