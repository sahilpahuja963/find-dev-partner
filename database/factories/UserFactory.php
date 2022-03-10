<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        for($i=1; $i<=10; ++$i) {
            $cover_images[]     = "asset(`assets/images/cover_images/$i.jpg`)";
            $profile_images[]   = "asset(`assets/images/profile_images/$i.jpg`)";
        }
        return [
            'first_name'        => $this->faker->unique()->name,
            'last_name'         => $this->faker->unique()->name,
            'username'          => $this->faker->unique()->name,
            'email'             => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'user_role_id'      => UserRole::all()->random(),
            'bio'               => $this->faker->sentence(rand(4, 6), true),
            'profile_image_url' => array_rand($profile_images),
            'cover_image_url'   => array_rand($cover_images),
            'remember_token'    => Str::random(10)
        ];
    }
}
