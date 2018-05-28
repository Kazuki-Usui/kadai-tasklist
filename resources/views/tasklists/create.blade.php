@extends('layouts.app')

@section('content')


<h1>作成ページ</h1>

    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
    
    
     {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}
    
    
     {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}


        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}
    


@endsection