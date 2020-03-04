@extends('Layouts.home-template')



@section('user_loged')

<p>{{auth()->user()->name}}</p>

@endsection

@section('content')


<h1 class="mt-4">Home</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Home</li>
</ol>

@endsection

@section('footer')



@endsection