<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             UserRoleSeeder::class,
             UserSeeder::class,
             SkillSeeder::class,
             SocialLinkSeeder::class,
             ExperienceUserSeeder::class,
             DistributedSkillSeeder::class
         ]);
    }
}
