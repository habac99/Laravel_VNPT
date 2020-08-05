<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class news_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'name'=>"BẢN TIN CU ĐƠ SỐ 35",
                'short_description'=>"",
                'full_description'=>'full',
                'cover_image'=>"https://vnptproject.blob.core.windows.net/imagecontainer/newproject_1_original-348x209.png",
                'is_highlight'=>true,
                'created_at' => Carbon::now()->format('d-m-y H:i:s'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s')

            ],
            [
                'name'=>"BẢN TIN CU ĐƠ SỐ 36",
                'short_description'=>"",
                'full_description'=>'full',
                'cover_image'=>"https://vnptproject.blob.core.windows.net/imagecontainer/cu36_19_original-2-348x209.png",
                'is_highlight'=>true,
                'created_at' => Carbon::now()->format('d-m-y H:i:s'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s')

            ],
        ]);
    }
}
