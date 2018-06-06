<?php

use Illuminate\Database\Seeder;
use App\Publication;
use App\User;

class PublicationsSeeder extends Seeder
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
         factory(Publication::class)->times(5)->create(['user_id'=>$user->id]);
       }
    }
}
