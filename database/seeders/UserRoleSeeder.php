<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name'  =>  'UI/UX Developer'],
            ['name'  =>  'Frontend Developer'],
            ['name'  =>  'Backend Developer'],
            ['name'  =>  'Web Developer'],
            ['name'  =>  'Full Stack Developer'],
            ['name'  =>  'Designer'],
            ['name'  =>  'Java Developer'],
            ['name'  =>  'Mobile App Developer'],
            ['name'  =>  'Analyst'],
            ['name'  =>  'Tester'],
        ];
        UserRole::insert($roles);
    }
}
