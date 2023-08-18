<?php

namespace Modules\News\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\News\Models\NewsFactory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}

