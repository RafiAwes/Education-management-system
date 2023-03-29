@extends('backend.master')
@section('content')
<div class="container-fluid">
    <div class="card mt-3">
        <div class="card-header bg-primary text-white text-center rounded">
            <h1>
                Student List
            </h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Department</th>
                    <th scope="col">Courses</th>
                    <th scope="col">Students</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($departments as $department)
                    <tr>
                        <th scope="row">{{ $department->id }}</th>
                        <td>{{ $department->department }}</td>
                        <td><a href="{{ url('show/courses/of/this/department')}}/{{ $department->id }}"  class="btn btn-warning btn-sm rounded text-white">C</a></td>
                        <td></td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
        </div>
    </div>
</div>


@endsection

