<?php
 
class UserTableSeeder extends Seeder {
 
  public function run()
  {
  		DB::table('users')->delete();

  		$user = User::create(array(
  			'username' => 'admin',
  			'email'    => 'elisha@essential-elements.net',
  			'password' => Hash::make('admin')
  		));
  }
 
}