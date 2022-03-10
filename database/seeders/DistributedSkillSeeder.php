<?php

namespace Database\Seeders;

use App\Models\DistributedSkill;
use Illuminate\Database\Seeder;

class DistributedSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            // Full Stack Developer & atomic skills
            [
                "composite_skill_id"    =>  18,
                "atomic_skill_id"       =>  5,
                "priority"              =>  3,
            ],
            [
                "composite_skill_id"    =>  18,
                "atomic_skill_id"       =>  6,
                "priority"              =>  3,
            ],
            [
                "composite_skill_id"    =>  18,
                "atomic_skill_id"       =>  3,
                "priority"              =>  2,
            ],
            [
                "composite_skill_id"    =>  18,
                "atomic_skill_id"       =>  7,
                "priority"              =>  3,
            ],
            [
                "composite_skill_id"    =>  18,
                "atomic_skill_id"       =>  11,
                "priority"              =>  3,
            ],
            [
                "composite_skill_id"    =>  18,
                "atomic_skill_id"       =>  13,
                "priority"              =>  4,
            ],
            [
                "composite_skill_id"    =>  18,
                "atomic_skill_id"       =>  14,
                "priority"              =>  1,
            ],
            [
                "composite_skill_id"    =>  18,
                "atomic_skill_id"       =>  15,
                "priority"              =>  2,
            ],
            [
                "composite_skill_id"    =>  18,
                "atomic_skill_id"       =>  16,
                "priority"              =>  3,
            ],
            [
                "composite_skill_id"    =>  18,
                "atomic_skill_id"       =>  17,
                "priority"              =>  3,
            ],
            [
                "composite_skill_id"    =>  18,
                "atomic_skill_id"       =>  19,
                "priority"              =>  4,
            ],
            [
                "composite_skill_id"    =>  18,
                "atomic_skill_id"       =>  20,
                "priority"              =>  4,
            ],

            // Frontend Developer & atomic skills
            [
                "composite_skill_id"    =>  19,
                "atomic_skill_id"       =>  5,
                "priority"              =>  4,
            ],
            [
                "composite_skill_id"    =>  19,
                "atomic_skill_id"       =>  6,
                "priority"              =>  4,
            ],
            [
                "composite_skill_id"    =>  19,
                "atomic_skill_id"       =>  7,
                "priority"              =>  3,
            ],
            [
                "composite_skill_id"    =>  19,
                "atomic_skill_id"       =>  13,
                "priority"              =>  4,
            ],
            [
                "composite_skill_id"    =>  19,
                "atomic_skill_id"       =>  16,
                "priority"              =>  3,
            ],
            [
                "composite_skill_id"    =>  19,
                "atomic_skill_id"       =>  17,
                "priority"              =>  3,
            ],

            // Backend Developer & atomic skills
            [
                "composite_skill_id"    =>  20,
                "atomic_skill_id"       =>  2,
                "priority"              =>  3,
            ],
            [
                "composite_skill_id"    =>  20,
                "atomic_skill_id"       =>  3,
                "priority"              =>  4,
            ],
            [
                "composite_skill_id"    =>  20,
                "atomic_skill_id"       =>  11,
                "priority"              =>  4,
            ],
            [
                "composite_skill_id"    =>  20,
                "atomic_skill_id"       =>  14,
                "priority"              =>  3,
            ],
            [
                "composite_skill_id"    =>  20,
                "atomic_skill_id"       =>  15,
                "priority"              =>  3,
            ],
        ];
        DistributedSkill::insert($skills);
    }
}
