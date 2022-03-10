<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class GithubHelper
{
    public static function getUserAllCommits($username): array
    {
        $commits = array();
        foreach (self::getUserRepos($username) as $userRepo) {
            $commits[] = self::getProjectCommits($username, $userRepo);
        }
        return array_merge(array_values($commits));
    }

    public static function getProjectCommits($username, $repoName): array
    {
        $response = Http::get("https://api.github.com/repos/{$username}/{$repoName}/commits");
        $commitsArr = json_decode($response->body());
        $commitsTitles = [];
        foreach ($commitsArr as $commitRes)
        {
            $commitsTitles[] = $commitRes->commit->message;
        }
        return $commitsTitles;
    }

    public static function getUserRepos($username): array
    {
        $response = Http::get("https://api.github.com/users/{$username}/repos");
        $reposArr = json_decode($response->body());
        $projectNames = [];
        foreach ($reposArr as $repo)
        {
            $projectNames[] = $repo->name;
        }
        return $projectNames;
    }
}
