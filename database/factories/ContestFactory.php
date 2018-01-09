<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Contest::class, function (Faker $faker) {
    return [
      'contest_name' => $faker->name,
      'number_of_winner' => $faker->randomDigit(),
      'contest_ended' => Carbon::now('Asia/Dhaka'),
      'contest_terms_and_conditions' => $faker->paragraph,
    ];
});
