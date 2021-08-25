@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>メッセージ一覧</h1>

    @if (count($task) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($task as $task)
                <tr>
                 {{-- メッセージ詳細ページへのリンク --}}
                    <td>{!! link_to_route('task.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {{-- メッセージ作成ページへのリンク --}}
    {!! link_to_route('messages.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}

@endsection