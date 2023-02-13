<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctor::class;

    /**
     * Define the model's default state.
     *
     * @return array<string,mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->firstName(),
            'last_name' => $this->lastName(),
            'specialty' => $this->specialization(),
            'email' => $this->unique()->safeEmail(),
            'description' => $this->paragraph(5),
        ];
    }
}
