@extends('layouts.app')

@section('content')

    <h1>タスク新規登録ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::select('status', ['' => '', '未着手' => '未着手', '着手中' => '着手中', '完了' => '完了']) !!}

        {!! Form::submit('登録') !!}

    {!! Form::close() !!}
    
@endsection