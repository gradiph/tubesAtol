@extends('template.t_index')
@section('title') Masuk | @stop
@section('content')

<div class="container">
    <div class="panel panel-default" style="width:40%; margin-left:auto; margin-right:auto; margin-top:14%;">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-user"></span> Login
            @if(Session::has('message'))
                <span class="label label-danger">{{ Session::get('message') }}</span>
            @endif
        </div>
        <div class="panel-body">
            {{ Form::open(['url' => URL('processLogin')]) }}
            Email: 
            @if($errors->has())
                <br />
                <span class="label label-danger">{{ $errors->first('username') }}</span>
                <p></p>
            @endif
            {{ Form::email('email', '', ['placeholder' => 'contoh@gmail.com','class' => 'form-control','autofocus' => 'autofocus']) }}
            Password:
            @if($errors->has())
                <br />
                <span class="label label-danger">{{ $errors->first('password') }}</span>
                <p></p>
            @endif
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
            <p></p>
            {{ Form::submit('Login', ['class' => 'btn btn-danger']) }}
            {{ Form::close() }}
        </div>
    </div>
</div>

@stop