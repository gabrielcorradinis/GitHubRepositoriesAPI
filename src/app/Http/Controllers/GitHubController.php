<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{

    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
        $userGitHub = Socialite::driver('github')->user();

        $user = User::firstOrCreate(
            [
                'github_id' => $userGitHub->getId(),
            ],
            [
                'email' => $userGitHub->getEmail(),
                'name' => $userGitHub->getName(),
                'github_nickname' => $userGitHub->getNickname(),
                'token' => $userGitHub->token,
            ]
        );
        auth()->login($user, true);

        return redirect('dashboard');
    }

    public function listRepos()
    {
        $token = Auth::user()->token;
        $nickname = Auth::user()->github_nickname;

        $response = Http::withHeaders([
            'Accept' => 'application/vnd.github+json',
            'Authorization' => "Bearer $token",
            'X-GitHub-Api-Version' => '2022-11-28'
        ])->get("https://api.github.com/users/$nickname/repos");

        $results = $response->body();
        $repositories = json_decode($results, true);

        return view('dashboard', compact('repositories'));
    }

    public function listCommits(string $name)
    {
        $token = Auth::user()->token;
        $nickname = Auth::user()->github_nickname;

        $commits = Http::withHeaders([
            'Accept' => 'application/vnd.github+json',
            'Authorization' => "Bearer $token",
            'X-GitHub-Api-Version' => '2022-11-28'
        ])->get("https://api.github.com/repos/$nickname/$name/commits", [
            'since' => today()->addDays(-90)->toIso8601String()
        ])->json();

        $commits = collect($commits)->groupBy(function ($commit) {
            return Date::createFromDate($commit['commit']['committer']['date'])->format('Y-m-d');
        })->sortKeys();

        return view('commits', compact('commits', 'name'));
    }
}
