@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row flex-lg-row-reverse align-items-center">
    <div>
        <table id="myTable" class="table">
            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                {{-- <th>Description</th>
                <th>Photo</th> --}}
            </thead>
            <tbody>
            @foreach ($users as $key => $user)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                {{-- <td>{{ $user->description}}</td>
                <td>{{ $user->photo}}</td> --}}
            </tr>
            @endforeach 
            </tbody>
        </table>
    </div>
  </div>
</div>

<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
  </script>
@endsection
