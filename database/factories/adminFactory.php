<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin>
 */
class adminFactory extends Factory
{
    /**
     * Define the model's default state.
     *yy
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => 'admin',  
            'password' => Hash::make('admin'),
            'school_id' => 1,
        ];
    }
}
