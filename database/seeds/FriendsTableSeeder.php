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
        $cantidad = $users->count();
      //  $ids = User::lists('id');
          // factory(Friend::class)->times(5)->create(['idAmigo1'=>$user->id]);
          foreach ($users as $user) {
            // $friends = User::random(5);

            $friends =User::orderByRaw( 'RAND()' )->take(5)->get() ;

            foreach ($friends as $f) {
              if ($user->id != $f->id){
                $user->friends()->attach($f);
              }
            }
          }
        }
    }
