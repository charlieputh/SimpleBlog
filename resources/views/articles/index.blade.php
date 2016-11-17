@extends('app')
@section('content')
    <h1>Articles</h1>
    <hr>
    @foreach($articles as $article)
        <h2><a href="/articles/{{$article->id}}">{{ $article->title }}</h2>

        <article>
            <div class="body">
                {{ $article->content }}
            </div>
        </article>
    @endforeach
@stop