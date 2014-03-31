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