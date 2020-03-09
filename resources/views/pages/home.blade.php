@extends('Layouts.home-template')



@section('user_loged')

<p>{{auth()->user()->name}}</p>

@endsection

@section('content')


<h1 class="mt-4">Top Tendring</h1>


    <div class="row">
   
        @foreach ($Games as $Gm)
    
        @include('Includes.Cards')
    
        @endforeach
    
    </div>




@endsection

@section('footer')



@endsection