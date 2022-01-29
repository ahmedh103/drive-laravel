@extends('layouts.app')

@section('content')


<h1 class="text-center text-info"> Drives : {{ $drive->id }} </h1>
<div class="container col-md-6">
    <div class="card">
        <img src="{{asset("upload/$drive->file")}}" alt="" class="img-top">
        <div class="card-body">

<h5> File title : {{$drive->title}} </h5>
<p> File description : {{$drive->description }} </p>


        </div>
        <a href="{{route('drives.download',$drive->id)}}" class="btn btn-info  "><i class="fas fa-download" style="font-size: 48px;"></i></a>
    </div>
</div>


 


    
@endsection