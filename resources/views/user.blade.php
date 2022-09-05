@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row flex-lg align-items-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body d-flex justify-content-center">
            <form action="{{ route('user.import') }}" method="post" enctype="multipart/form-data">
              @csrf
              <label for="file" class="d-flex justify-content-center pb-2">Import Data</label>
              <input type="file" name="file" class="form-control"  required>
              <div class="d-flex justify-content-center">
                <button class="btn btn-info mt-2">Import</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <label for="export" class="d-flex justify-content-center">Export Data</label>
            <div class="d-flex justify-content-center">
              <a href="{{ route('user.export') }}">
                <button class="btn btn-success mt-2">Export</button>
              </a>
            </div>
          </div>
        </div>
      </div>
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
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
  </script>
@endsection
