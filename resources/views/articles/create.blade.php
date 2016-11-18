@extends('app')
@section('content')
    <div class="contaner">
    <h1>撰写新文章</h1>
    <form method="POST" action="/articles/store" accept-charset="utf-8">
        <input type="hidden" name="_token" value = "{{ csrf_token() }}"/>
        <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" name="title"id="formGroupExampleInput" placeholder="Example input" style="width:900px">
        </div>

        <div class="form-group">
            <label for="exampleTextarea">Example textarea</label>
            <textarea class="form-control" id="exampleTextarea" name="content" rows="5" style="width:900px"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">提交日志</button>
    </form>

    </div>
@stop


