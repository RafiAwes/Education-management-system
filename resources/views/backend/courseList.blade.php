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
                    <th scope="col">Course Code</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Sections</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                    <tr>
                        <th scope="row">{{ $course->id }}</th>
                        <td>{{ $course->course_code}}</td>
                        <td>{{ $course->course_name}}</td>
                        <td><a href="{{ url('show/section/of/this/course')}}/{{ $course->id }}"  class="btn btn-warning btn-sm rounded text-white">C</a></td>
                        <td></td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
        </div>
    </div>
</div>


@endsection

