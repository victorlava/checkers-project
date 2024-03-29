<?php

use Illuminate\Database\Seeder;
use App\Statistic;
use App\User;

class StatisticsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $count = User::count();
        // $countUsers = count($users);

        foreach (range(0,51) as $key => $number) {

            $statistic = new Statistic();
            $statistic->user_id = $key + 1;
            $statistic->wins = $faker->numberBetween(1,100);
            $statistic->losses = $faker->numberBetween(1,100);
            $statistic->draws = $faker->numberBetween(1,100);
            $statistic->abandoned = $faker->numberBetween(1,100);
            $statistic->save();
        }

    }
}
