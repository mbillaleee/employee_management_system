@extends('layouts.main')

@section('content')
	<div class="d-sm-flex align-items-center justify-content-between md-4">
		<h1 class="h3 mb-0 text-gray-800">Users</h1>
	</div>
	 <div class="row">
	 	<div class="stretch-card">
	 		<div>
	 			@if(session()->has('message'))
	 				<div class="alert alert-success">
	 					{{ session('message')}}
	 				</div>
	 			@endif
	 		</div>
                <div class="card">
                	<div class="card-header">
                		<a href="{{ route('users.create')}}" class="float-right">Create</a>
                	</div>
                  <div class="card-body">
                    <h4 class="card-title">Table with contextual classes</h4>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> ID</th>
                            <th> Username </th>
                            <th> Email </th>
                            <th> Manage </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($users as $user)
                          	<tr class="table-info">
                            <td> {{ $user->id}} </td>
                            <td> {{ $user->username}} </td>
                            <td> {{ $user->email}} </td>
                            <td> edit/delet </td>
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
