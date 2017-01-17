<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [

        [ 'name'=>'admin','email'=>'admin@gmail.com','role'=>'admin','password'=>Hash::make('123456')],
        ['name'=>'superadmin','email'=>'superadmin@gmail.com','role'=>'admin','password'=>Hash::make('123456')],

        ];

       DB::table('users')->delete();
       foreach ($users as $user){
       User::insert($user);
     }

    }
}
