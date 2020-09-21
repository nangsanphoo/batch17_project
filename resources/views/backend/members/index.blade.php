@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
          <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
            <h1 class="h3 mb-0 text-gray-800">Members List</h1>
            <a href="{{route('members.create')}}" class="btn btn-info">Add New</a>
            	
        </div>
        <div class="row">
        	<div class="col-md-12">
        		<table class="table table-bordered">
	          		<thead class="bg-dark text-white">
	          			<tr>
	          				<th>No</th>
	          				<th>Code No</th>
	          				<th>Name</th>
							<th>Photo</th>
	          				<th>Actions</th>

	          			</tr>
	          		</thead>
	          		<tbody>
	          			@php $i=1; @endphp
	          			@foreach($members as $member)
	          			<tr>
	          				<td>{{$i++}}</td>
	          				<td>{{$member->codeno}}</td>
	          				<td>{{$member->name}} </td>
	          				<td><img src="{{$member->photo}}" class="img-fluid w-25"> </td>
	          				<td>
	          					<a href="{{route('members.show',$member->id)}}" class="btn btn-primary">Detail</a>
	          					<a href="{{route('members.edit',$member->id)}}" class="btn btn-warning">Edit</a>
	          					
	          					<form method="post" action="{{route('members.destroy',$member->id)}}">
	          						@csrf
	          						@method('DELETE')
	          						<button class="btn btn-danger">Delete</button>
	          					</form>

	          				</td>

	          			</tr>
	          			@endforeach
	          		</tbody>
          		</table>
        	</div>
          	
        </div>
     </div>
@endsection