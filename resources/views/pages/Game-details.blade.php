@extends('Layouts.home-template')



@section('user_loged')

<p>{{auth()->user()->name}}</p>

@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="title">{{$Games->Name}}</h5>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-6 pr-md-1">
                <label>Generes</label>
                <p>{{$Games->Genere}}</p>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6 pr-md-1">

                <label>Developer</label>
                <p>{{$Games->Developer}}</p>

            </div>
            <div class="col-md-6 pl-md-1">
                <div class="form-group">
                    <label>Status</label>
                    <p>{{$Games->Status}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>raiting</label>
                <p> {{$Raiting }}</p>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4 pr-md-1">
                <div class="form-group">
                    <label>Value</label>
                    <p>{{$Games->Value}}</p>
                </div>
            </div>
            <div class="col-md-4 px-md-1">
                <div class="form-group">
                    <label>Contact_page</label>
                    <p>{{$Games->Contact_page}}</p>
                </div>
            </div>
            <div class="col-md-4 pl-md-1">
                <div class="form-group">
                    <label>Published_at</label>
                    <p>{{$Games->Published_at}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<h4> reviews </h4>
<div>
    @foreach ($reviews as $rw)
    <div class="card">
        <div class="card-header">
            <p>comentraio {{$rw->id}} </p>
        </div>
        <div class="card-body">
            <p> {{$rw->Raiting}} </p>
        </div>
        @endforeach
    </div>

    {{ $reviews->links() }}
</div>



@endsection

@section('footer')



@endsection