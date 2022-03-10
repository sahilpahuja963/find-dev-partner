<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class SocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socialLinks = [
            [
                "name"          =>  "GitHub",
                "domain_name"   =>  "https://github.com",
                "is_mandatory"  =>  1
            ],
            [
                "name"          =>  "LinkedIn",
                "domain_name"   =>  "https://www.linkedin.com",
                "is_mandatory"  =>  1
            ]
        ];
        SocialLink::insert($socialLinks);
    }
}
