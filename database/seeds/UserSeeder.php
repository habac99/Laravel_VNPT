<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'name' => 'Steve Roger',
                'avatar'=>'https://vnptproject.blob.core.windows.net/imagecontainer/83903525_10212780715711613_3348867875652763648_o.jpg',
                'email' => 'admin1@gmail.com',
                'email_verified_at'=>Carbon::now()->format('d-m-y H:i:s'),
                'password'=> bcrypt(123456),
                'remember_token'=>str::random(15),
                'level' => 2,
                'created_at' => Carbon::now()->format('d-m-y H:i:s'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s'),



            ],
            [
                'name' => 'Tony Stark',
                'avatar'=>'https://vnptproject.blob.core.windows.net/imagecontainer/87038173_2578685132376480_8577131985980358656_o.jpg',
                'email' => 'admin2@gmail.com',
                'email_verified_at'=>Carbon::now()->format('d-m-y H:i:s'),
                'password'=> bcrypt(123456),
                'remember_token'=>str::random(15),
                'level' => 2,
                'created_at' => Carbon::now()->format('d-m-y H:i:s'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s'),



            ]
        ];
        DB::table('users')->insert($data);
    }
}
