@extends('layouts.default')
@section('title', '重置密码')

@section('content')
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <h5>重置密码</h5>
            </div>

            <div class="card-body">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('password.email') }}" method="post">
                    @csrf

                    <div class="form-group {{ $errors->has('email') ? ' is-invalid' : '' }} ">
                        <label for="email" class="form-control-label">邮箱地址</label>
                        <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">发送密码重置邮件</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
