<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class project_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      DB::table('projects')->insert([
          [
              "name"=>"Phái cử 15 nguồn lực PHP cho một công ty phần mềm của Việt Nam",
              "description"=>' ',
              "reference"=>"trung-tam-phan-mem-vien-thong-viettel-tap-doan-vien-thong-quan-doi",
              'created_at' => Carbon::now()->format('d-m-y H:i:s'),
              'updated_at' => Carbon::now()->format('d-m-y H:i:s'),

          ],
          [
              "name"=>"Phái cử 10 nguồn lực kiểm thử cho một công ty phần mềm của Việt Nam",
              "description"=>' ',
              "reference"=>"trung-tam-giai-phap-va-thuong-mai-dien-tu-tong-cong-ty-vien-thong-viette",
              'created_at' => Carbon::now()->format('d-m-y H:i:s'),
              'updated_at' => Carbon::now()->format('d-m-y H:i:s'),

          ],
          [
              "name"=>"Phái cử 25 nguồn lực .NET cho một công ty phần mềm của Việt Nam",
              "description"=>' ',
              "reference"=>"cong-ty-tnhh-fsoft-da-nang",
              'created_at' => Carbon::now()->format('d-m-y H:i:s'),
              'updated_at' => Carbon::now()->format('d-m-y H:i:s'),

          ],
          [
              "name"=>"Dự án tư vấn bán hàng cho một công ty phần mềm lớn của Việt Nam",
              "description"=>' ',
              "reference"=>"cong-ty-tnhh-usol-viet-nam",
              'created_at' => Carbon::now()->format('d-m-y H:i:s'),
              'updated_at' => Carbon::now()->format('d-m-y H:i:s'),

          ],
          [
              "name"=>"Phái cử 20 nguồn lực JAVA cho một công ty phần mềm của Việt Nam",
              "description"=>' ',
              "reference"=>"cong-ty-tnhh-thuong-mai-va-xuat-nhat-khau-viettel-tap-doan-vien-thong-quan-doi",
              'created_at' => Carbon::now()->format('d-m-y H:i:s'),
              'updated_at' => Carbon::now()->format('d-m-y H:i:s'),

          ],




      ]);
    }
}
