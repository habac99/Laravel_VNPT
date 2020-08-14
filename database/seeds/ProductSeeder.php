<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $whatapp_image = "";
        $twitter_image = "";
        DB::table('products')->insert([
            [
               'product_name'=>'Twitter 1',
                'logo'=>"https://vnptproject.blob.core.windows.net/imagecontainer/Twitter-bird-white-blue2.png",
                'short_description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'full_description'=>' ',
                'google_link'=>'https://play.google.com/store/apps/details?id=com.twitter.android&hl=vi',
                'apple_link'=>'https://apps.apple.com/us/app/twitter/id333903271',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),


            ],
            [
                'product_name'=>'Whatsapp 1',
                'logo'=>"ttps://vnptproject.blob.core.windows.net/imagecontainer/2018_social_media_popular_app_logo-whatsapp-512.webp",
                'short_description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'full_description'=>' ',
                'google_link'=>'https://play.google.com/store/apps/details?id=com.twitter.android&hl=vi',
                'apple_link'=>'https://apps.apple.com/us/app/whatsapp-messenger/id310633997',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),


            ],
            [
                'product_name'=>'Twitter 2',
                'logo'=>"https://vnptproject.blob.core.windows.net/imagecontainer/Twitter-bird-white-blue2.png",
                'short_description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'full_description'=>' ',
                'google_link'=>'https://play.google.com/store/apps/details?id=com.twitter.android&hl=vi',
                'apple_link'=>'https://apps.apple.com/us/app/twitter/id333903271',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),


            ],
            [
                'product_name'=>'Whatsapp 2',
                'logo'=>"ttps://vnptproject.blob.core.windows.net/imagecontainer/2018_social_media_popular_app_logo-whatsapp-512.webp",
                'short_description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'full_description'=>' ',
                'google_link'=>'https://play.google.com/store/apps/details?id=com.twitter.android&hl=vi',
                'apple_link'=>'https://apps.apple.com/us/app/whatsapp-messenger/id310633997',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),


            ],
            [
                'product_name'=>'Twitter 3',
                'logo'=>"https://vnptproject.blob.core.windows.net/imagecontainer/Twitter-bird-white-blue2.png",
                'short_description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'full_description'=>' ',
                'google_link'=>'https://play.google.com/store/apps/details?id=com.twitter.android&hl=vi',
                'apple_link'=>'https://apps.apple.com/us/app/twitter/id333903271',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),


            ],
            [
                'product_name'=>'Whatsapp 3',
                'logo'=>"ttps://vnptproject.blob.core.windows.net/imagecontainer/2018_social_media_popular_app_logo-whatsapp-512.webp",
                'short_description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'full_description'=>' ',
                'google_link'=>'https://play.google.com/store/apps/details?id=com.twitter.android&hl=vi',
                'apple_link'=>'https://apps.apple.com/us/app/whatsapp-messenger/id310633997',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),


            ],
            [
                'product_name'=>'Twitter 4',
                'logo'=>"https://vnptproject.blob.core.windows.net/imagecontainer/Twitter-bird-white-blue2.png",
                'short_description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'full_description'=>' ',
                'google_link'=>'https://play.google.com/store/apps/details?id=com.twitter.android&hl=vi',
                'apple_link'=>'https://apps.apple.com/us/app/twitter/id333903271',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),


            ],
            [
                'product_name'=>'Whatsapp 4',
                'logo'=>"ttps://vnptproject.blob.core.windows.net/imagecontainer/2018_social_media_popular_app_logo-whatsapp-512.webp",
                'short_description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'full_description'=>' ',
                'google_link'=>'https://play.google.com/store/apps/details?id=com.twitter.android&hl=vi',
                'apple_link'=>'https://apps.apple.com/us/app/whatsapp-messenger/id310633997',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),


            ],

        ]);
    }
}
