<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'whatsapp' => '13131313',
            'messenger' => 'https://www.facebook.com/No123el/',
            'telephone' => '13131313',
            'slogan' => 'Tu Futuro Esta Seguro',
            'slogan_text' => 'asdf asdf sadf sad fsd fsad fsd fsad fsad fsad fslkj sdlkdjjllksd jfklj sdlkf jsldk fj'
        ];
    }
}
