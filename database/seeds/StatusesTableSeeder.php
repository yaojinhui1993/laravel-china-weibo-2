<?php

use Faker\Generator;
use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userIds = [1, 2, 3];
        $faker = app(Generator::class);

        $statuses = factory(Status::class)->times(500)->make()->each(function ($status) use ($userIds, $faker) {
            $status->user_id = $faker->randomElement($userIds);
        });

        Status::insert($statuses->toArray());
    }
}
