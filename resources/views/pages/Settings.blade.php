@extends('Layouts.home-template')



@section('user_loged')

<p>{{auth()->user()->name}}</p>

@endsection

@section('content')


<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Edit Profile</h5>
            </div>
            <form action="{{ route('Settings') }}" method="POST">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 pr-md-1">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="name" id="name"
                                    class="form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    placeholder="Username" value="{{auth()->user()->name}}">
                                {!! $errors->first('name' , '<span class="help-block" style="color : red">:message</span>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-md-1">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="FirstName" id="FirstName" class="form-control"
                                    placeholder="First name" value="{{auth()->user()->FirstName}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-1">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="LastName" class="form-control" placeholder="Last Name"
                                    value="{{auth()->user()->LastName}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="Address" class="form-control" placeholder="Home Address"
                                    value="{{auth()->user()->Address}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-md-1">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="City" class="form-control" placeholder="City"
                                    value="{{auth()->user()->City}}">
                            </div>
                        </div>
                        <div class="col-md-4 px-md-1">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" name="Country" class="form-control" placeholder="Country"
                                    value="{{auth()->user()->Country}}">
                            </div>
                        </div>
                        <div class="col-md-4 pl-md-1">
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input type="number" name="Postal_code" class="form-control"
                                value="{{auth()->user()->Postal_Code}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">Save</button>
                </div>
            </form>
        </div>

    </div>
    <div class="col-md-4">
        <div class="card card-user">
            <div class="card-body">
                <p class="card-text">
                    <!-- user writing space -->
                </p>
                <div class="author">
                    <h5 class="title">{{auth()->user()->name}}</h5>
                    <p class="description">
                        <!-- user writing space -->
                    </p>
                </div>
                <p>
                    <!-- writing space -->
                </p>
                <div class="card-description">
                    <p>{{auth()->user()->FirstName}} </p>
                    <p>{{auth()->user()->LastName}} </p>
                </div>
            </div>
            <div class="card-footer">
                <i class="fas fa-database"></i>
                <i class="fas fa-key"></i>
            </div>
        </div>
    </div>
</div>










@endsection

@section('footer')



@endsection