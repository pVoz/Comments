<?php

namespace Database\Factories;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */class Category extends Model
{
    use HasFactory;
}
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(5, true),
            'body' => $this->faker->sentence(45),
            'likes' => $this->faker->randomNumber(5),
            'author' => $this->faker->name(),
            'draft' => $this->faker->boolean()
        ];
    }
}
   