@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
          <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
            <h1 class="h3 mb-0 text-gray-800">User Request List</h1>
            	
        </div>
        <div class="row">
        	<div class="col-md-8">
        		<table class="table table-bordered">
	          		<thead class="bg-dark text-white">
	          			<tr>
	          				<th>No</th>
	          				<th>Name</th>
	          				<th>Email</th>
	          				<th>Address</th>
	          				<th>DOB</th>
	          				<th>Photo</th>
	          				<th>Age</th>
	          				<th>Gender</th>
	          				<th>Hobbies</th>
	          				<th>Phone No.</th>
	          				<th>Action</th>
	          			</tr>
	          		</thead>
	          		<tbody>
	          			@php $i=1; @endphp
	          			@foreach($members as $member)
	          			<tr>
	          				<td>{{$i++}}</td>
	          				<td>{{$member->user->name}}</td>
	          				<td>{{$member->user->email}} </td>
	          				<td>{{$member->user->address}}</td>
	          				<td>{{$member->user->DOB}}</td>
	          				<td>{{$member->user->photo}}</td>
	          				<td>{{$member->age}}</td>
	          				<td>{{$member->gender}}</td>
	          				<td>{{$member->hobbies}}</td>
	          				<td>{{$member->phoneno}}</td>
	          				<td>
	          					<a href="{{route('accept',$member->id)}}" class="btn btn-info mx-2 mb-3">Accept</a>
	          					
	          					
	          					<form method="post" action="{{route('members.destroy',$member->id)}}" class="d-inline-block">
	          						@csrf
	          						@method('DELETE')
	          						<input type="submit" class="btn btn-danger mt-2" value="Delete">
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