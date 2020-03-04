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
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Create Account</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{ route('register') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="small mb-1" for="name">Username:</label>
                                        <input class="form-control py-4 {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" id="name"
                                            value="{{ old('name') }}" placeholder="Enter Username" />
                                        {!! $errors->first('name' , '<span class="help-block" style="color : red"> :message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="email">Email</label>
                                        <input class="form-control py-4 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" id="email"
                                            value="{{ old('email') }}" placeholder="Enter email address" />
                                        {!! $errors->first('email' , '<span class="help-block" style="color : red"> :message</span>') !!}
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div
                                                class="form-group">
                                                <label class="small mb-1" for="password">Password</label>
                                                <input class="form-control py-4 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="text" name="password"
                                                    id="password" placeholder="Enter password" />
                                                {!! $errors->first('password' , '<span class="help-block" style="color : red">
                                                    :message</span>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="form-group">
                                                <label class="small mb-1" for="password_confirmation">Confirm Password</label>
                                                <input class="form-control py-4 {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" type="text"
                                                    name="password_confirmation" id="password_confirmation"
                                                    placeholder="Confirm password" />
                                                {!! $errors->first('password_confirmation' , '<span class="help-block" style="color : red">
                                                    :message</span>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-4 mb-0">
                                        <input type="submit" name="submit" class="btn btn-primary btn-block"
                                            value="Create Account">
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="/">Have an account? Go to login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>








@endsection
