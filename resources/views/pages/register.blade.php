@section('mytitle', '| Register')

@extends('base')

@section('content')

<div class="row mt-5">
    <div class="col-md-4 offset-md-4">
        <div class="card mb-3 shadow-lg">
            <div class="card-header text-light text-center" style="background-color:rgb(254, 205, 112, 0.7)">
                <h3 class="card-title font-weight-dark mt-2"> User Registration</h3> <hr>
            </div>
            <div class="card-body shadow-sm" style="background-color: rgb(44, 54, 57, 0.4)">
                {!! Form::open(['url'=>'/register', 'method'=>'post']) !!}
                    <div class="form-group _auth @error('name') has-error @enderror">
                        {!! Form::label('name','<img src="https://cdn-icons-png.flaticon.com/512/7716/7716755.png" width="25" height="25" class="rounded"> Name',[],false) !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        <span class="errspan" id="errspan">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group _auth @error('sex') has-error @enderror">
                        {!! Form::label('sex','<img src="https://cdn-icons-png.flaticon.com/512/2499/2499845.png" width="25" height="25" class="rounded"> Gender',[],false) !!}
                        {{Form::select('sex', [
                            'Male' => 'Male',
                            'Female' => 'Female',
                        ], null, ['class'=>'form-control form-select'])}}
                        <span class="errspan" id="errspan">{{ $errors->first('sex') }}</span>
                    </div>
                    <div class="form-group _auth @error('email') has-error @enderror">
                        {!! Form::label('email','<img src="https://cdn-icons-png.flaticon.com/512/2374/2374449.png" width="25" height="25" class="rounded"> Email',[],false) !!}
                        {!! Form::text('email', null, ['class'=>'form-control']) !!}
                        <span class="errspan" id="errspan">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group _auth @error('password') has-error @enderror">
                        {!! Form::label('password', '<img src="https://cdn-icons-png.flaticon.com/512/807/807241.png" width="25" height="25" class="rounded"> Password',[],false) !!}
                        {!! Form::password('password', ['class'=>'form-control']) !!}
                        <span class="errspan" id="errspan">{{ $errors->first('password') }}</span>
                    </div>
                    <div class="form-group _auth @error('password_confirmation') has-error @enderror">
                        {!! Form::label('password_confirmation', '<img src="https://cdn-icons-png.flaticon.com/512/7130/7130962.png" width="25" height="25" class="rounded"> Confirm Password',[],false) !!}
                        {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
                        <span class="errspan" id="errspan">{{ $errors->first('password_confirmation') }}</span>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-outline-primary" onclick="btnload()" id="actionBtn" type="submit"><img src="https://cdn-icons-png.flaticon.com/512/5174/5174586.png" width="20" height="20" class="rounded"> Submit </button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop
