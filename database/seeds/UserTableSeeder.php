<?php

use Illuminate\Database\Seeder;
use \Charlie\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::truncate();

      $user = new User();
      $user->name = 'Wilker';
      $user->email = 'wilkeralves97@gmail.com';
      $user->password = bcrypt(12345);
      $user->remember_token = str_random(10);
      $user->save();

      factory(User::class, 20)->create();
    }
}
