@extends('layouts.default')
@section('content')
    <article class="article">
        <h1>{{ $article['meta']['title'] }}</h1>
        <h2>{{ $article['meta']['published_at'] }}</h2>
        <p>{!! $article['html'] !!}</p>
    </article>
@stop