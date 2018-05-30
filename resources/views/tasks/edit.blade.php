@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
<h1>id: {{ $task->id }} のタスク編集ページ</h1>

    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
        <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

        </div>
        {!! Form::submit('更新', ['class' => 'btn btn-warning']) !!}

    {!! Form::close() !!}

@endsection