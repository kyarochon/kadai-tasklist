@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク編集</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('status', 'ステータス：') !!} 
        {!! Form::select('status', ['未完了' => '未完了', '完了済' => '完了済', 'キャンセル' => 'キャンセル']); !!}
        

        <!--{!! Form::text('status') !!} -->



        {!! Form::label('content', 'タスク名：') !!} 
        {!! Form::text('content') !!} 

        {!! Form::submit('更新') !!} 

    {!! Form::close() !!}

@endsection