@extends('layouts.app')

@section('content')

 {{-- @if (Auth::user()->role ==1) --}}
     

<h1 class="text-center text-info">create Drives  </h1>
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
<form action="{{route('drives.store')}}"  method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Drive title</label>
        <input type="text" name="title" class="form-control">

    
    </div>
    <div class="form-group">
    <label for="">Drive description</label>
    <input type="text" name="description" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Upload file</label>
        <input type="file" name="inputFile" class="form-control">
        </div>
        
    <button  class="btn btn-info"> Send File</button>
</form>

        </div>
    </div>
</div>





    
@endsection

{{-- @endif --}}