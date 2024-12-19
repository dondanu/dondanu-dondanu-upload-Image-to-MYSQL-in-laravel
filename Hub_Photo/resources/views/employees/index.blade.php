@extends('employees.layout')
@section('content')
<div class="container">
<div class="row">
<div class="col-12" style="padding:20px;">
<div class="card">
 <div class="card-header">Laravel 9 Image 
Upload and Display in Datatable | File Storage</div>
 <div class="card-body">
 <a href="{{ url('/employee/create') }}"
class="btn btn-success btn-sm" title="Add New Contact">
DR K DANUSAN | Department of ICT 
 <i class="fa fa-plus" aria-hidden="true"></i> Add New
 </a>
 <br/>
 <br/>
 <div class="table-responsive">
 <table class="table">
<thead>
 <tr>
 <th>#</th>
 <th>Name</th>
 <th>Address</th>
 <th>Telephone</th> 
 <th>Gender</th> 
 <th>Index</th> 
 <th>Photo</th>
 </thead>
 </thead>
 <tbody>
 @foreach($employees as $item)
 <tr>
 <td>{{ $loop->iteration 
}}</td>
 <td>{{ $item->name }}</td>
 <td>{{ $item->address }}</td>
 <td>{{ $item->mobile }}</td>
 <td>{{ $item->gender }}</td>
 <td>{{ $item->index }}</td>
 
 <td> <img src="{{ asset($item->photo) }}" width= '50' height='50' class="img img-responsive" /> </td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection