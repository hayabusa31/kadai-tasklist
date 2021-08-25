@extends('layouts.app')

@section('task')
<h1>id = {{ $task->id }} のメッセージ詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
 {{-- メッセージ編集ページへのリンク --}}
    {!! link_to_route('task.edit', 'このメッセージを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
    {{-- メッセージ削除フォーム --}}
    {!! Form::model($task, ['route' => ['task.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection