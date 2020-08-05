<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class commentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customer_comment')->insert([
            [
                "name"=>"Nguyễn Nhật Quang",
                "image"=>"https://vnptproject.blob.core.windows.net/imagecontainer/sinh-vien-nam-3-thuc-tap-nganh-cntt-2016-04-164x144.jpg",
                "company"=>"Chủ tịch C.ty CP Phần mềm Hải Hòa Phó chủ tịch Vinasa",
                "comment"=>"Dịch vụ Phái cử nguồn nhân lực công nghệ thông tin của DCV là một dịch mới, dịch vụ sẽ hỗ trợ các doanh nghiệp linh hoạt trong vấn đề sử dụng nhân sự, hỗ trợ cho ngành CNTT ngày càng phát triển.",
                'created_at' => Carbon::now()->format('d-m-y H:i:s'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s'),


            ],
            [
                "name"=>"Nguyễn Quang Huy",
                "image"=>"https://vnptproject.blob.core.windows.net/imagecontainer/14993473_10154601804892667_7612419798747264024_n-164x144.jpg",
                "company"=>"Chủ tịch C.ty CP Giải pháp và Phần mềm Netbase",
                "comment"=>"Tôi đã từng sử dụng dịch vụ Phái cử của DCV. C.Ty đã đáp ứng nhân lực kịp thời cho chúng tôi trong thời gian ngắn với chất lượng nhân sự tốt, đáp ứng yêu cầu công việc đề ra.",
                'created_at' => Carbon::now()->format('d-m-y H:i:s'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s'),


            ],
            [
                "name"=>"Phan Văn Tiến",
                "image"=>"https://vnptproject.blob.core.windows.net/imagecontainer/13558600_1215477911797947_5986157598931584985_o-164x144.jpg",
                "company"=>"Phó Tổng Giám Đốc Công ty Cổ phần Smartjob",
                "comment"=>"Các dự án phần mềm của DCV đã áp dụng quy trình sản xuất linh hoạt, đảm bảo yêu cầu chất lượng và tiến độ của Smartjob đề ra.",
                'created_at' => Carbon::now()->format('d-m-y H:i:s'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s'),


            ],

        ]);
    }
}
