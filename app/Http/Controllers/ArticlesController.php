<?php

namespace App\Http\Controllers;

use App\Contracts\YamlMarkdownParserContract;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;

class ArticlesController extends Controller
{
    public function show($slug, YamlMarkdownParserContract $parser)
    {
        $rawContents = Storage::get('articles/' . $slug . '.md');
        $document = $parser->parse($rawContents);
        $article['meta'] = $document->getYAML();
        $article['html'] = $document->getContent();
        return view('articles.show', compact('article'));
    }
}
