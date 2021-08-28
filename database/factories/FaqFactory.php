<?php

namespace Rifat\SimpleFaq\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Rifat\SimpleFaq\Models\Faq;

class FaqFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Faq::class;
    private $priority = 1;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question' => substr_replace($this->faker->sentence(rand(4,6)),'?', -1),
            'answer' => $this->faker->paragraph(rand(2,3)),
            'priority' => $this->priority++,
            'publication_status' => rand(0,1),
        ];
    }
}
