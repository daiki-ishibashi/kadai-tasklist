@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <div class="col-md-6">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
        </div>
                @endforeach
            </tbody>
        </table>
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
            @endforeach
        </ul>
    @endif
         {!! link_to_route('tasks.create', '新規タスクの投稿') !!}
    

@endsection