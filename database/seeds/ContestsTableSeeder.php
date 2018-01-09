<?php

use Illuminate\Database\Seeder;
use App\Contest;
use Carbon\Carbon;

class ContestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Contest::insert([
          'contest_name' => 'Modern Design',
          'number_of_winner' => 3,
          'contest_ended' => Carbon::now('Asia/Dhaka'),
          'contest_terms_and_conditions' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
      ]);
    }
}
