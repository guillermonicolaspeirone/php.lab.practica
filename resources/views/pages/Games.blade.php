@extends('Layouts.home-template')



@section('user_loged')

<p>{{auth()->user()->name}}</p>

@endsection

@section('content')



<div class="row">
   
    @foreach ($Games as $Gm)

    @include('Includes.Cards')


    @endforeach

</div>

{{ $Games->links() }}

@endsection

@section('footer')



@endsection