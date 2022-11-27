<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            [
                'Name'=>'Gagas Media',
                'Address'=>'Jl. H. Montong No.57, RT.6/RW.3, Ciganjur, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia',
                'Phone'=>'02178883030',
                'E-mail'=>'redaksi@gagasmedia.net',
                'Image'=>'https://www.gudeg.net/cni-content/uploads/modules/direktori/logo/gagas-media.jpg'
            ],
            [
                'Name'=>'Kompas Gramedia',
                'Address'=>'Jl. Palmerah Sel. No.22-26, RT.4/RW.2, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Indonesia',
                'Phone'=>'0215483008',
                'E-mail'=>'kompasgramedia@gmail.com',
                'Image'=>'https://asset.kompas.com/crops/lvYGKhhQMo7WbK81H1p_cFQsOlw=/0x0:1000x667/750x500/data/photo/2018/08/15/19860368112.jpg'
            ]

        ]);
    }
}
