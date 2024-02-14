@extends('layouts.main')

@section('pageContent')

<div class="page-content">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12 p-4" align="center">
                <h2>
                    Student Management System
                </h2>
            </div>
        </div>
        <div class="col-md-12 ">
            <div class="stu-form-area" >
                <form action="{{route('students.update',$student->id)}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 ">


                                    <div class="mb-3">
                                        <label for="email" class="form-label">Student Name</label>
                                        <input name="stu_name" value="{{$student->stu_name}}" type="text" class="@error('stu_name')is-invalid @enderror form-control" id="email" >
                                        @error('stu_name')
                                            <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                                        @enderror
                                    </div>


                        </div>
                        <div class="col-md-6 ">


                                    <div class="mb-3">
                                        <label for="dob" class="form-label">Student DOB</label>
                                        <input type="date" value="{{$student->stu_dob}}" name="stu_dob" class="@error('stu_dob')is-invalid @enderror form-control" id="dob">
                                        @error('stu_dob')
                                            <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                                        @enderror
                                    </div>


                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 ">


                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" value="{{$student->stu_address}}"name="stu_address" class="@error('stu_address')is-invalid @enderror form-control" id="address" >
                                        @error('stu_dob')
                                            <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                                        @enderror
                                    </div>


                        </div>


                    </div>
                    <input type="submit" class="btn btn-primary" value='Update Now'>
                </form>
            </div>

            <br>


        </div>


    </div>
</div>

@endsection
