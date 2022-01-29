@extends('layouts.app')

@section('content')


<h1 class="text-center text-info">Edit Drives:{{$drive->id}}  </h1>
@if ($errors->any())
    <div class="alert alert-danger mx-auto w-50">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container col-md-6">
    <div class="card">
        <div class="card-body">
<form action="{{route('drives.update',$drive->id)}}"  method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Drive title</label>
        <input type="text" value="{{$drive->title}}" name="title" class="form-control">

    
    </div>
    <div class="form-group">
    <label for="">Drive description</label>
    <input type="text" value="{{$drive->description}}"  name="description" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Upload file : <img width="60px" src="{{asset("upload/$drive->file")}}" alt=""></label>
        <input type="file" name="inputFile" class="form-control">
        </div>
    <button  class="btn btn-info"> Send File</button>
</form>

        </div>
    </div>
</div>





    
@endsection