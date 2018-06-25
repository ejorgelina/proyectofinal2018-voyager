<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Friend;

class FriendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        foreach ($users as $user) {
          factory(Friend::class)->times(5)->create(['idAmigo1'=>$user->id]);
        }
    }
}
