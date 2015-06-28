<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Mni\FrontYAML\Parser;

class ArticlesController extends Controller
{
    public function show($slug, Parser $parser)
    {
        $rawContents = Storage::get('articles/' . $slug . '.md');
        $document = $parser->parse($rawContents);
        $article['meta'] = $document->getYAML();
        $article['meta']['published_at'] = Carbon::createFromTimestamp($article['meta']['published_at'])->toFormattedDateString();
        $article['html'] = $document->getContent();
        return view('articles.show', compact('article'));
    }
}
