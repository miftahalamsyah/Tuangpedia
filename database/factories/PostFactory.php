<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'resto' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5,10))).'</p>',
            'alamat' => $this->faker->sentence(mt_rand(2,8)),
            'harga' => $this->faker->sentence(mt_rand(2,8)),
            'buka' => $this->faker->sentence(mt_rand(2,8)),
            'sajian' => $this->faker->sentence(mt_rand(2,8)),
            'body' => collect($this->faker->paragraphs(mt_rand(5,7)))
                ->map(fn($p)=>"<p>$p</p>")
                ->implode(''),
            'user_id' => mt_rand(1,5),
            'category_id' => mt_rand(1,9)
        ];
    }
}