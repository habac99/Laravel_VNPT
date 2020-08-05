<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class event_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('events')->insert([
            [
                'name'=>"NGÀY ĐẦU NĂM 2020 – HÀNH HƯƠNG ĐẾN TAM CHÚC",
                'short_description'=>"Chùa Tam Chúc cổ được xây dựng từ thời nhà Đinh, gắn với truyền thuyết “Tiền Lục nhạc – hậu Thất Tinh”. Dân gian kể lại có 7 ngọn núi gần làng Tam chúc,xuất hiện&nbsp;một đốm sáng lớn tựa như 7 ngôi sao, sáng suốt đêm ngày. Dân làng gọi đó là núi “Thất Tinh”. Ngôi […]",
                'full_description'=>'full',
                'cover_image'=>"https://vnptproject.blob.core.windows.net/imagecontainer/Thiết-kế-không-tên-348x209.png",
                'is_highlight'=>true,
                'created_at' => Carbon::now()->format('d-m-y H:i:s'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s')

            ],
            [
                'name'=>"PHẦN MỀM A HÓA ĐƠN” CHÍNH THỨC THAM GIA CUỘC ĐUA CHUYỂN ĐỔI SỐ",
                'short_description'=>"Ngày 10/02/2020, Công ty Cổ phần truyền số liệu Việt Nam chính thức ra mắt giải pháp hóa đơn điện tử – “Phần mềm A Hóa Đơn” “CMCN 4.0 là xu thế tất yếu của toàn cầu, là đòn bẩy tăng mạnh năng suất và chất lượng cho mọi ngành nghề phát triển Để bắt […]",
                'full_description'=>'full',
                'cover_image'=>"https://vnptproject.blob.core.windows.net/imagecontainer/33C88E21-F6D6-4718-B3FA-05A6DCE6E248-348x209.jpg",
                'is_highlight'=>true,
                'created_at' => Carbon::now()->format('d-m-y H:i:s'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s')

            ],


        ]);
    }
}
