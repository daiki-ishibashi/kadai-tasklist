@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
    <h1>タスク新規作成ページ</h1>


    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        <div class="col-xs-12">
        <div class="col-sm-offset-2 col-sm-8">
        <div class="col-lg-offset-3 col-lg-6">  
        <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
        
        
        <button type="button" class="btn btn-default">
          <span class="glyphicon glyphicon-sunglasses"></span>
            {!! Form::submit('投稿') !!}
        </button>

    {!! Form::close() !!}

@endsection