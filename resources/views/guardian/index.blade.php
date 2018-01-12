<!-- index.blade.php -->
@extends('guardian')
@section('inner_content')
  <div class="container">
    <div class="form-group row">
        <a href="{{action('GuardianController@create')}}" class="btn btn-warning">New</a>
    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Email</th>
	<th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($guardians as $guardian)
      <tr>
        <td>{{$guardian['id']}}</td>
        <td>{{$persons[$guardian['person_id']]['first_name']}}</td>
        <td>{{$persons[$guardian['person_id']]['middle_name']}}</td>
        <td>{{$persons[$guardian['person_id']]['last_name']}}</td>
        <td>{{$persons[$guardian['person_id']]['contact_email']}}</td>
	<td><a href="{{action('GuardianController@edit', $guardian['id'])}}" class="btn btn-warning">Edit</a></td>
        <td><a href="{{action('GuardianController@destroy', $guardian['id'])}}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
