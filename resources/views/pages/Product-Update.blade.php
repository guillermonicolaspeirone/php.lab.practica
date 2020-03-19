@extends('Layouts.home-template')

@section('user_loged')

<p>{{auth()->user()->name}}</p>

@endsection

@section('content')


<div class="card">
    <div class="card-header">
        <h5 class="title">Product update</h5>
    </div>
    <form action="{{ route('UpdateProducts' , $Product->id ) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 pr-md-1">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="ProductName"
                        class="form-control  {{ $errors->has('ProductName') ? ' is-invalid' : '' }}"
                        placeholder="ProductName" value="{{ $Product->ProductName }}">
                        {!! $errors->first('ProductName' , '<span class="help-block" style="color : red">:message</span>')!!}
                    </div>
                </div>
                <div class="col-md-6 pl-md-1">
                    <div class="form-group">
                        <label>Brand</label>
                        <input type="text" name="ProductBrand"
                            class="form-control  {{ $errors->has('ProductBrand') ? ' is-invalid' : '' }}"
                            placeholder="ProductBrand" value="{{  $Product->ProductBrand }}">
                        {!! $errors->first('ProductBrand' , '<span class="help-block" style="color : red">:message</span>')
                        !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 pr-md-1">
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" name="Type"
                            class="form-control  {{ $errors->has('Type') ? ' is-invalid' : '' }}" placeholder="Type"
                            value="{{  $Product->Type }}">
                        {!! $errors->first('Type' , '<span class="help-block" style="color : red">:message</span>')
                        !!}
                    </div>
                </div>
                <div class="col-md-4 px-md-1">
                    <div class="form-group">
                        <label>Stock</label>
                        <input type="text" name="Stock"
                            class="form-control  {{ $errors->has('Stock') ? ' is-invalid' : '' }}"
                            placeholder="Stock" value="{{  $Product->Stock}}">
                        {!! $errors->first('Stock' , '<span class="help-block"
                            style="color : red">:message</span>') !!}
                    </div>
                </div>
                <div class="col-md-4 pl-md-1">
                    <div class="form-group">
                        <label>Value</label>
                        <input type="number" name="Value"
                            class="form-control  {{ $errors->has('Value') ? ' is-invalid' : '' }}"
                            value="{{ $Product->Value}}">
                        {!! $errors->first('Value' , '<span class="help-block" style="color : red">:message</span>') !!}
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