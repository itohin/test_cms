<?php

use Timlis\News\Models\News;


Route::get('/seed_news', function(){

	$faker = Faker\Factory::create('ru_RU');

		for($i = 0; $i < 30; $i++){

			$name = $faker->sentence($nbWords = 3, $variableNbWords = true);

			News::create([

				'title' => $name,

				'slug' => str_slug($name, '-'),

				'anallytics' => $faker->sentence($nbWords = 1, $variableNbWords = true),

				'links' => $faker->sentence($nbWords = 1, $variableNbWords = true),

				'author' => $faker->sentence($nbWords = 1, $variableNbWords = true),

				'category_id' => $faker->numberBetween($min = 1, $max = 10),

				'content' => $faker->paragraph($nbSetences = 53, $variableNbSetences = true)


			]);   

		}

		return "News created!";

});