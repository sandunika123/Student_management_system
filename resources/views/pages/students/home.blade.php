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
                <form action='/students/save' method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 ">


                                    <div class="mb-3">
                                        <label for="email" class="form-label">Student Name</label>
                                        <input name="stu_name" type="text" class="@error('stu_name')is-invalid @enderror form-control" id="email" >
                                        @error('stu_name')
                                            <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                                        @enderror
                                    </div>


                        </div>
                        <div class="col-md-6 ">


                                    <div class="mb-3">
                                        <label for="dob" class="form-label">Student DOB</label>
                                        <input type="date" name="stu_dob" class="@error('stu_dob')is-invalid @enderror form-control" id="dob">
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
                                        <input type="text" name="stu_address" class="@error('stu_address')is-invalid @enderror form-control" id="address" >
                                        @error('stu_dob')
                                            <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                                        @enderror
                                    </div>


                        </div>


                    </div>
                    <input type="submit" class="btn btn-primary" value='Register Now'>
                </form>
            </div>

            <br>
            <div class="datatablearea">
                <div class="row">
                    <div class="col md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Student Name</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)

                                    <tr>
                                        <th scope="row">{{$student->stu_name}}</th>
                                        <td>{{$student->stu_dob}}</td>
                                        <td>{{$student->stu_address}}</td>
                                        <td>
                                            <a href="{{route('students.edit',$student->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                                          </svg></a> |



                                          <a href="{{route('students.delete',$student->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                          </svg></a></td>

                                    </tr>
                                @endforeach




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>

@endsection
