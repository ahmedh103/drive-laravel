@extends('layouts.app')

@section('content')


<h1 class="text-center text-info"> List Drives  </h1>

@if (Session::has('done'))
    <div class="alert alert-success mx-auto w-50">
<h5> {{Session::get('done')}}</h5>

    </div>
@endif
<div class="container col-md-6">
    <div class="card">
        <div class="card-body">
<table class="table table-dark">

    <tr>
<th>ID</th>
<th>Title</th>
<th colspan="3">Action</th>

    </tr>
    @foreach ($drives as $data)
    <tr>
        
          <th> {{$data->id}} </th>  
          <th> {{$data->title}} </th>  
          <th><a href="{{route('drives.show',$data->id)}}"> <i class="far text-info fa-eye" style="font-size: 25px;"></i></a></th>
          <th><a href="{{route('drives.edit',$data->id)}}"><i class="fas text-primary fa-edit" style="font-size: 25px;"></i></a></th>
          <th><a href="{{route('drives.destroy',$data->id)}}"> <i class="fas text-danger fa-trash-alt" style="font-size:  25px;"></i></a></th>
      
    </tr>
    @endforeach
</table>

        </div>
    </div>
</div>




    
@endsection