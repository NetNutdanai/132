    @extends('layouts.default')

    @section('title')

    @section('content')
        <script>
            window.onload = function() {
                const editButtons = document.querySelectorAll('.btn.btn-primary');
            };
        </script>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="margin-right: 40px">Edit Student
                                <a href="{{ url('students') }}" class="btn btn-danger float-end"
                                    style="text-align: right">BACK</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('update-student/' . $student->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group mb-3">
                                    <label for="">Student Name</label>
                                    <input type="text" name="name" value="{{ $student->name }}" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Student Email</label>
                                    <input type="text" name="email" value="{{ $student->email }}" class="form-control"
                                        disabled readonly>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Student Major</label>
                                    <input type="text" name="course" value="{{ $student->course }}"
                                        class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Student Image</label>
                                    <input type="file" name="profile_image" class="form-control">
                                    <img src="{{ asset('uploads/students/' . $student->id . '/' . $student->profile_image) }}"
                                        width="70px" height="70px" alt="image">
                                </div>

                                <div class="form-group mb-3">
                                    <button action="{{ url('students') }}" type="submit" class="btn btn-primary"
                                        class="btn btn-primary">Update</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
