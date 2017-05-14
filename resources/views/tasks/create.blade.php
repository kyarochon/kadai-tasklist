@extends('layouts.app')

@section('content')

    <h1>タスク作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        {!! Form::label('status', 'ステータス：') !!} 
        {!! Form::text('status') !!} 

        {!! Form::label('content', 'タスク名：') !!} 
        {!! Form::text('content') !!} 
        
        {!! Form::submit('作成') !!} 

    {!! Form::close() !!}

@endsection