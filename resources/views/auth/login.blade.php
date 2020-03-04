@extends('Layouts.Login-template')

@section('Background')
    
class="bg-primary"

@endsection

@section('Formulario')

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Login</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{ route('login') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="small mb-1" for="name">Username:</label>
                                        <input class="form-control py-4 {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" type="text"
                                            value="{{ old('name') }}" placeholder="Enter Username" />
                                        {!! $errors->first('name' , '<span class="help-block" style="color : red" > :message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="password">Password</label>
                                        <input class="form-control py-4 {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" type="password"
                                            placeholder="Enter password" />
                                        {!! $errors->first('password' , '<span class="help-block" style="color : red"> :message</span>') !!}
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox"><input class="custom-control-input"
                                                id="rememberPasswordCheck" type="checkbox" /><label
                                                class="custom-control-label" for="rememberPasswordCheck">Remember
                                                password</label></div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="password/reset">Forgot Password?</a>
                                        <input type="submit" name="submit" class="btn btn-primary" value="Login">
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="register">Need an account? Sign up!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

@endsection

