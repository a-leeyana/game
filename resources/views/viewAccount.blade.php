@extends('layouts.dashboard.main2')

@section('power')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Profile</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Full name</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
             
            <tr>
              <td></td>
              <td>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</td>
              <td>{{ auth()->user()->email }}</td>
              <td>{{ auth()->user()->password }}</td>
              <td>
                <a href="/" class="badge bg-info"><span data-feather="eye" class="align-text-bottom"></span></a>
                <a href="" class="badge bg-warning"><span data-feather="edit" class="align-text-bottom"></span></a>
                <a href="" class="badge bg-danger"><span data-feather="x-circle" class="align-text-bottom"></span></a>
              </td>
            </tr>
      
          </tbody>
        </table>
      </div>
        
@endsection