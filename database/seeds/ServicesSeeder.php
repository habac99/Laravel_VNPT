<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('services')->insert([
            [
            'service_name' => 'Gia Công Phần Mềm',
            'alt_name'=>'gia-cong-phan-mem',
            'logo'=>'',
            'image_link'=>'',
            'short_description'=>'Gia công phần mềm là một xu hướng CNTT đã phát triển, trưởng thành khẳng định tiềm năng và vị thế của nó với các doanh nghiệp trên toàn thế giới. Gia công phần mềm không chỉ còn là lựa chọn đơn thuần cho doanh nghiệp mà được coi là một quyết định thông minh cho doanh nghiệp khi muốn cắt giảm chi phí và tăng lợi nhuận trên đầu tư.',
            'full_description'=>'',
            'isHighlight'=>true,
            'created_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh')
        ],
                [
                    'service_name' => 'Dịch Vụ IT Support',
                    'alt_name'=>'it-support',
                    'logo'=>'',
                    'image_link'=>'',
                    'short_description'=>'Với đội ngũ nhân viên hỗ trợ chuyên nghiệp, giàu kinh nghiệm trong việc quản lý hệ thống mạng, máy chủ web, máy chủ mail, tổng đài, … Dịch vụ IT của DCV sẽ giúp doanh nghiệp của bạn tiết kiệm chi phí rất nhiều lần so với tự duy trì 1 đội ngũ nhân sự đủ trình độ cao để vận hành bộ máy của bạn một cách hiệu quả nhất.',
                    'full_description'=>'',
                    'isHighlight'=>true,
                    'created_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh'),
                    'updated_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh')
                ]
            ]




       );
    }
}
