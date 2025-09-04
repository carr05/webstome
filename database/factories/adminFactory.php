<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

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
<<<<<<< HEAD
            'password' => Hash::make('admin')
=======
            'password' => Hash::make('admin'),
            'school_id' => 1,
>>>>>>> d018293d4462c8cdcbb40bf7e7e17559b776ceb8
        ];
    }
}
