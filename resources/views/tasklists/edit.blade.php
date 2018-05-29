@extends('layouts.app')

@section('content')


<h1>id: {{ $tasklist->id }} の編集ページ</h1>

<div class="row">
<div class="col-xs-12">
<div class="col-sm-offset-2 col-sm-8">
<div class="col-md-offset-2 col-md-8">
<div class="col-lg-offset-3 col-lg-6">

    {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}
    
        <div class="form-group">
    
        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        
        
        </div>
        
        <div class="form-group">


        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
        
        </div>
        
        <div class="form-group">
        
        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}

        {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}

        {!! Form::close() !!}
    
        </div>
    
</div>
</div>
</div>
</div>
</div>



@endsection