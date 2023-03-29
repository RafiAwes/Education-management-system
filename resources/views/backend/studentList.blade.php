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
                    <th scope="col">Student Name</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Department</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Admission Date</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Image</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student )
                    <tr>
                        <th scope="row">{{ $student->id }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->student_id }}</td>
                        <td>{{ $student->department }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->contact_number }}</td>
                        <td>{{ $student->admissiondate }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>{{ $student->bloodgroup }}</td>
                        <td>
                            @if ($student->image != null)
                                <img src="{{ url($student->image) }}" height="60" width="60">
                            @endif
                        </td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
