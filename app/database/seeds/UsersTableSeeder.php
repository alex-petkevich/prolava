<?php

class UsersTableSeeder extends Seeder
{

   public function run()
   {
      $users = array(
         array(
            'username' => 'admin',
            'email' => 'alex@mrdoggy.info',
            'password' => Hash::make('nimdanimda'),
            'updated_at' => DB::raw('NOW()'),
            'created_at' => DB::raw('NOW()'),
            'remember_token' => ''
         )
      );

      DB::table('users')->insert($users);
   }

}