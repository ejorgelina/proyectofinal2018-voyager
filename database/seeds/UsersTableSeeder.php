<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 10 ; $i++) {
         $user = new User();
         $user->name = 'user'.$i;
         $user->email = 'user'.$i.'@gmail.com';
         $user->password = bcrypt('secret');
         $user->save();

        }
    }
}
