<?php

namespace Modules\Project\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Project\Models\Project;
use \Faker\Provider\fa_IR\Person as Person;
use \Faker\Provider\fa_IR\Address as Address;
use \Faker\Provider\fa_IR\Text as Text;
use \Faker\Provider\fa_IR\Company as Company;
use \Faker\Provider\fa_IR\PhoneNumber as PhoneNumber;
class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('fa_IR');
        return [
            'title'   => $faker->realText(80 ),
            'slug'    => $faker->slug(),
            'summary' => $faker->realText(300),
            'content' => $faker->randomHtml(10),
            'cover'   => $faker->imageUrl(640, 480, 'technology' ),
            'status'  => $faker->randomElement(['publish' ,'draft']),
            'chosen'  => $faker->randomNumber(),
        ];
    }
}

