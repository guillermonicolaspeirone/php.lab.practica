@extends('Layouts.home-template')

@section('jsScript')

<script>

</script>

@endsection

@section('user_loged')

<p>{{auth()->user()->name}}</p>

@endsection

@section('content')


<div class="card" ng-app="myApp" ng-controller="myCtrl">
    <div class="card-header">
        <h5 class="title">Add Game</h5>
    </div>
    <form action="{{ route('GamesAdd') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 pr-md-1">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name"
                            class="form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name"
                            value="{{ old('name') }}">
                        {!! $errors->first('name' , '<span class="help-block" style="color : red">:message</span>') !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 pr-md-1">
                    <div class="form-group">
                        <label>Genere</label>
                        <select class="form-control selectpicker {{ $errors->has('Genere') ? ' is-invalid' : '' }}"
                            name="Genere[]" id="GenereSelect" multiple>
                            <option>action</option>
                            <option>strategy</option>
                            <option>survival</option>
                        </select>
                        {!! $errors->first('Genere' , '<span class="help-block" style="color : red">:message</span>')!!}
                    </div>
                </div>
                <div class="col-md-6 pl-md-1">
                    <div class="form-group">
                        <label>Developer</label>
                        <input type="text" name="Developer"
                            class="form-control  {{ $errors->has('Developer') ? ' is-invalid' : '' }}"
                            placeholder="Developer" value="{{ old('Developer') }}">
                        {!! $errors->first('Developer' , '<span class="help-block" style="color : red">:message</span>')
                        !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Value</label>
                        <input type="text" name="Value"
                            class="form-control  {{ $errors->has('Value') ? ' is-invalid' : '' }}" placeholder="Value"
                            value="{{ old('Value') }}">
                        {!! $errors->first('Value' , '<span class="help-block" style="color : red">:message</span>') !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 pr-md-1">
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" name="Status"
                            class="form-control  {{ $errors->has('Status') ? ' is-invalid' : '' }}" placeholder="Status"
                            value="{{ old('Status') }}">
                        {!! $errors->first('Status' , '<span class="help-block" style="color : red">:message</span>')
                        !!}
                    </div>
                </div>
                <div class="col-md-4 px-md-1">
                    <div class="form-group">
                        <label>Contact page</label>
                        <input type="text" name="Contact_page"
                            class="form-control  {{ $errors->has('Contact_page') ? ' is-invalid' : '' }}"
                            placeholder="Contact page" value="{{ old('Contact_page') }}">
                        {!! $errors->first('Contact_page' , '<span class="help-block"
                            style="color : red">:message</span>') !!}
                    </div>
                </div>
                <div class="col-md-4 pl-md-1">
                    <div class="form-group">
                        <label>img</label>
                        <input type="file" name="img"
                            class="form-control  {{ $errors->has('img') ? ' is-invalid' : '' }}"
                            value="{{ old('img') }}">
                        {!! $errors->first('img' , '<span class="help-block" style="color : red">:message</span>') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-fill btn-primary">Save</button>
        </div>
    </form>
</div>
@endsection


@section('footer')
@endsection