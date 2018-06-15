<?php

use Illuminate\Database\Seeder;
use App\Travelplan;
use App\User;

class TravelplansTableSeeder extends Seeder
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
        factory(Travelplan::class)->times(2)->create(['user_id'=>$user->id]);

    }
  }
}
