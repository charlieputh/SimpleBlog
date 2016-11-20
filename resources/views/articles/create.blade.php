@extends('app')
@section('content')
    <h1>撰写新文章</h1>
    {!! Form::open(['url'=>'articles']) !!}
        <div class="form-group">
        {!! Form::label('title') !!}
        {!! Form::text('title',null,['class'=>'form-control','jelly'=>'bool','style'=>'width:900px']) !!}
        </div>
    <div class="form-group">
        {!! Form::label('content','正文:') !!}
        {!! Form::textarea('content',null,['class'=>'form-control','style'=>'width:900px']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('published_at','发布日期') !!}
        {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('发表文章',['class'=>'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
    {{--<div class="contaner">--}}
    {{--<h1>撰写新文章</h1>--}}
    {{--<form method="POST" action="/articles/store" accept-charset="utf-8">--}}
        {{--<input type="hidden" name="_token" value = "{{ csrf_token() }}"/>--}}


        {{--<div class="form-group">--}}
            {{--<label for="formGroupExampleInput">Name</label>--}}
            {{--<input type="text" class="form-control" name="title"id="formGroupExampleInput" placeholder="Example input" style="width:900px">--}}
        {{--</div>--}}

            {{--<div class="form-group">--}}
            {{--<label for="exampleTextarea">Content</label>--}}
            {{--<textarea class="form-control" id="exampleTextarea" name="content" rows="8" style="width:900px"></textarea>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<lalbel for="formGroupExampleInput">Published at</lalbel>--}}
            {{--<input type="date" name="published_at" class="form-control"/>--}}
        {{--</div>--}}
        {{--<button type="submit" class="btn btn-primary">提交日志</button>--}}
    {{--</form>--}}

    {{--</div>--}}
@stop


