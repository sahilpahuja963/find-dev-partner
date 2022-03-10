<?php

namespace Database\Seeders;

use App\Models\ExperienceUser;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;

class ExperienceUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiences = [];
        for($i=0; $i<10; ++$i) {
            $userId = User::all()->random()->id;
            $skillId = Skill::all()->random()->id;
            if(
                ExperienceUser::where('user_id', $userId)
                    ->where('skill_id', $skillId)
                    ->exists()
            ) {
                continue;
            }
            $experience = rand(0, 20)."-".rand(0, 12);
            $experiences[] = [
                'user_id'       =>  $userId,
                'skill_id'      =>  $skillId,
                'experience'    =>  $experience
            ];
        }
        ExperienceUser::insert($experiences);
    }
}
