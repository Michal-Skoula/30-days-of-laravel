<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
			'name' 		=> 	fake()->name(),
			'job_title' => 	fake()->jobTitle(),
			'email' 	=>	fake()->unique()->safeEmail(),
			'phone' 	=>	fake()->phoneNumber(),

        ];
    }
	public function no_phone() : static {
//		return $this->state(fn (array $attributes) => [
//			'phone' => null,
//		]); This callback version exists, not quite sure why

		return $this->state(['phone' => null]);

	}


}
