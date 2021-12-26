<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Address;

class AddressFactory extends Factory
{
  
    // protected $model = Address::class;
    protected $model = \App\Models\Address::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'location'=>$this->faker->city,
            'street'=>$this->faker->address,
            'email'=>$this->faker->email,
            'phone_number'=>$this->faker->e164PhoneNumber,
            
        ];
    }
}
