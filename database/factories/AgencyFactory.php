<?php

namespace Database\Factories;

use App\Models\Agency;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AgencyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agency::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'manager_id' => '5f8c56c5dc250000a5005b43',
            'state_id' => '1',
            'name' => $this->faker->name,
            'code' => Str::random(10),
            'phone' => $this->faker->phoneNumber,
            'fax' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'status' => $this->faker->numberBetween(0, 1),
        ];
    }
}
