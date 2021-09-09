<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
        
                "nom" =>$this->faker->lastName(),
                "description" => $this->faker->text(),
                "date" => $this->faker->date('d-m-Y'),
                "User_id" => $this->faker->numberBetween(1, count(User::all())),   
        ];
    }
}
