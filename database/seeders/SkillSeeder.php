<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            ["name" =>  "C#"],
            ["name" =>  "SQL"],
            ["name" =>  "Java"],
            ["name" =>  "C++"],
            ["name" =>  "HTML"],
            ["name" =>  "JavaScript"],
            ["name" =>  "XML"],
            ["name" =>  "C"],
            ["name" =>  "Perl"],
            ["name" =>  "Python"],
            ["name" =>  "PHP"],
            ["name" =>  "Objective-C"],
            ["name" =>  "AJAX"],
            ["name" =>  "ASP.NET"],
            ["name" =>  "Ruby"],
            ["name" =>  "React"],
            ["name" =>  "Angular"],
            ["name" =>  "Full Stack Developer"],
            ["name" =>  "Frontend Developer"],
            ["name" =>  "Backend Developer"]
        ];
        Skill::insert($skills);
    }
}
