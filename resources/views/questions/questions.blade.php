@extends('layouts.dashboard.main2')

@section('power')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Questions</h1>
    </div>

    <div class="table-responsive">
      <a href="/questions/create" class="btn btn-primary mb-3">Create new question</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Level</th>
              <th scope="col">Questions</th>
              <th scope="col">Answer</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($question as $question)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>
                <a href="/questions/{{ $questions->id }}" class="badge bg-info"><span data-feather="eye" class="align-text-bottom"></span></a>
                <a href="" class="badge bg-warning"><span data-feather="edit" class="align-text-bottom"></span></a>
                <a href="" class="badge bg-danger"><span data-feather="x-circle" class="align-text-bottom"></span></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
        
@endsection