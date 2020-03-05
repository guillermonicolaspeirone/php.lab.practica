@extends('Layouts.home-template')



@section('user_loged')

<p>{{auth()->user()->name}}</p>

@endsection

@section('content')


<p>

    {{$Games->Name}}
   
</p>



@endsection

@section('footer')



@endsection