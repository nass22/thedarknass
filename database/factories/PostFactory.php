<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3,true),
            'content' => $this->faker->paragraphs($nb = 8, $asText = true),
            'language'=> 'PHP, MySQL, React',
            'teamwork'=> false,
            'url_demo'=> 'www.google.be',
            'user_id'=> 1,
            'image'=>'img.png'
        ];
    }
}
