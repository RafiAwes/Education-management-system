@extends('backend.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-3 rounded">
            <div class="card-header bg-primary text-white text-center rounded">
                <h2>Upload Student Data</h2>
            </div>
            <div class="card-body">
                <form action="{{ url('admit/student') }}" class="text-center" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3">
                            <label>Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter the name here" class="form-control rounded @error('name') is-invalid @enderror" required>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-3">
                            <label>ID</label>
                            <input type="number" id="id" name="id" placeholder="Enter the id here" class="form-control rounded @error('id') is-invalid @enderror" required>
                            @error('id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-3">
                            <label>Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter the id here" class="form-control rounded @error('email') is-invalid @enderror" required>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-3">
                            <label>Contact Number</label>
                            <input type="number" id="number" name="number" placeholder="Enter the id here" class="form-control rounded @error('number') is-invalid @enderror" required>
                            @error('number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Department</label>
                                <select name="dep_id" id="dep_id" class="form-control rounded">
                                    <option value="">Select One</option>
                                    @foreach ($departments as $department )
                                        <option value="{{ $department->id }}">{{ $department->department }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label>Admission Date</label>
                            <input type="date" id="date" name="date" class="form-control rounded @error('date') is-invalid @enderror" required>
                            @error('date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-5">
                            <label>Image</label>
                            <input type="file" name="image" onchange="document.getElementById('bah').src = window.URL.createObjectURL(this.files[0])" class="form-control" required>
                            <img id="bah" class="img-fluid mt-1">
                        </div>
                        <div class="col-lg-3">
                            <label>Date of birth</label>
                            <input type="date" id="dob" name="dob" class="form-control rounded @error('dob') is-invalid @enderror" required>
                            @error('dob')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-3">
                            <label>Blood group</label>
                            <input type="text" id="bloodGroup" name="bloodGroup" placeholder="Blood Group" class="form-control rounded @error('bloodGroup') is-invalid @enderror" required>
                            @error('bloodGroup')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Admit Student" class="btn btn-primary btn rounded">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer_js')

@endsection
