@extends('layout')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                Registro
            </div>
        </div>

        <div class="panel-body">
            <form method="post" action="{{ url('register') }}" class="form">
                {!! csrf_field() !!}

                <div class="form-group">
                    <input name="">
                </div>
            </form>
        </div>
    </div>

@endsection