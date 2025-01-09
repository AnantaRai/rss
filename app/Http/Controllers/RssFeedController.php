<?php

namespace App\Http\Controllers;

use App\Services\GuardianApiService;

class RssFeedController extends Controller
{
    protected $guardianApiService;

    public function __construct(GuardianApiService $guardianApiService)
    {
        $this->guardianApiService = $guardianApiService;
    }

    public function getRssFeed($section)
    {
        try {
            $articles = $this->guardianApiService->fetchArticlesBySection($section);


            if (!isset($articles['response']['results'])) {
                return response()->json(['error' => 'Invalid section'], 400);
            }
    

            return response()->view('rss', [
                    'section' => $section, 
                    'articles' => $articles['response']['results']
                ])
                ->header('Content-Type', 'text/xml');

        } catch (\Exception $e) {       
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
