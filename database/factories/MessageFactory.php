<?php

namespace Database\Factories;

use App\Models\Message;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    protected $model = Message::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sender_id' => User::all()->random()->id,
            'receiver_id' => User::all()->random()->id,
            'message' => $this->faker->sentence(rand(3, 8)),
            'time' => Carbon::parse(Carbon::now()->timestamp-rand(0, 1000))->toDateTimeString(),
        ];
    }
}
