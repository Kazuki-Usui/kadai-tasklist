@extends('layouts.app')

@section('content')


<h1>id = {{ $tasklist->id }} の詳細ページ</h1>

  <div class=" row col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">

    <p>タイトル{{$tasklist->title}}</p>
    <p>ステータス{{ $tasklist->status }}</p>
    <p>メッセージ{{ $tasklist->content }}</p>

      {!! link_to_route('tasklists.edit', 'このメッセージを編集', ['id' => $tasklist->id], ['class' => 'btn btn-default']) !!}


      {!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}

      {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        
      {!! Form::close() !!}
    

</div>
    
@endsection
