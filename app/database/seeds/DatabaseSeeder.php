<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PostTableSeeder');
		$this->call('UserTableSeeder');

	}

}

class PostTableSeeder extends seeder {

	public function run()
	{
		$Post = Post::create(array(
			'title' => 'test blog post',
			'subtitle' => "test blog subtitle",
			'copy' => 'Test blog copy. This is just as test.'
		));
	}

}

class UserTableSeeder extends seeder {

	public function run()
	{
		$User = User::create(array(
			'email' => "sethgossler@gmail.com",
			'name' => "Seth Gossler",
			'password' => Hash::make("test")
		));
	}

}