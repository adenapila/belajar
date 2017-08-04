<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
		'title' => 'Panduan Memulai Laravel',
		'seotitle' => 'panduan-memulai-laravel',
		'author' => 'Sigerweb',
		'content' => 'Lorem ipsum excepteur aliquip ad nulla amet duis consectetur eu ullamco aliquip aute.',
		'image' => 'laravel.jpg',
		'hits' => 100
		]);
    }
}
