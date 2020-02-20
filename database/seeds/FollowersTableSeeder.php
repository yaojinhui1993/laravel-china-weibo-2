<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        $john = $users->first();
        $users = $users->slice(1);

        $john->follow($users->pluck('id')->toArray());

        $users->each(function ($user) use ($john) {
            $user->follow($john->id);
        });
    }
}
