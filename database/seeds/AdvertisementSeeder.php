<?php

use App\Models\Category;
use App\Models\Language;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdvertisementSeeder extends Seeder
{
    public function run() {

        $faker = Faker\Factory::create();

        foreach(range(1, 10) as $i) {
            DB::table('advertisement')->insert([
                'advertisementno' => $faker->randomDigit,
                'category_id' => Category::parents()->inRandomOrder()->first()->id,
                'account_type_id' => $faker->randomElement([0, 1]),
                'customer_id' => User::inRandomOrder()->first()->id,
                'advertisment_type_id' => $faker->randomElement([0, 1]),
                'advertisement_positions_id' => $faker->randomElement([0, 1]),
                'magazine_status' => $faker->randomElement([0, 1]),
                'magazine_version_id' => $faker->randomDigit,
                'magazine_page_no_id' => $faker->randomDigit,
                'magazine_filename' => $faker->url,
                'store_id' => $faker->randomElement(range(1, 10)),
                'storecategory_id' => $faker->randomDigit,
                'country_id' => $faker->randomDigit,
                'city_id' => $faker->randomDigit,
                'region_id' => $faker->randomDigit,
                'title' => $faker->sentence(4),
                'details' => $faker->text,
                'details_summary' => $faker->text,
                'mobile_no' => $faker->phoneNumber,
                'phone_no' => $faker->phoneNumber,
                'image_filename' => $faker->image('public/uploads', 400, 400, 'food'),
                'video_filename' => '',
                'advertisment_date' => $faker->date('Y-m-d'),
                'expiry_date' => $faker->date('Y-m-d'),
                'price' => $faker->randomFloat(),
                'currency_id' => $faker->randomDigit,
                'discount' => $faker->randomFloat(),
                'language_id' => Language::inRandomOrder()->first()->id,
                'visits' => $faker->randomNumber('3'),
                'love_count' => $faker->randomNumber('3'),
                'view_count' => $faker->randomNumber('3'),
                'rating_avg' => $faker->randomFloat('3'),
                'rating_count' => $faker->randomNumber('3'),
                'show_mobile_no' => $faker->boolean,
                'send_message' => $faker->boolean,
                'lon' => $faker->address,
                'lat' => $faker->address,
                'weight' => $faker->randomFloat(),
                'rate' => $faker->randomFloat(),
                'top_list' => $faker->boolean(),
                'is_free' => $faker->boolean,
                'is_deleted' => $faker->boolean,
                'user_id' => User::inRandomOrder()->first()->id,
                'receive_voucher' => $faker->boolean,
                'is_dis_appear' => $faker->dateTime,
            ]);
        }
    }
}
