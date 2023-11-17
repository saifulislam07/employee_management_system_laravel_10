@extends('admin.layouts.master')

@section('content')
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4 no-print">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-md-5 col-auto mb-3 float-left">
                        <h4 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            Edit User
                        </h4>
                    </div>

                </div>
            </div>
        </div>
    </header>



    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <form action="{{ route('users.update', [$user->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PATCH') }}
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">General Information</div>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName">Name <span
                                                    class="spanstyle">(English)</span></label>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ $user->name }}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName">Name <span class="spanstyle">(Bangla)</span></label>
                                            <input type="text" name="name_bn"
                                                class="form-control @error('name_bn') is-invalid @enderror"
                                                value="{{ $user->name_bn }}">
                                            @error('name_bn')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName">Father Name <span
                                                    class="spanstyle">(English)</span></label>
                                            <input type="text" name="father_name"
                                                class="form-control @error('father_name') is-invalid @enderror"
                                                value="{{ $user->father_name }}">
                                            @error('father_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName">Mother Name </label>
                                            <input type="text" name="mother_name"
                                                class="form-control @error('mother_name') is-invalid @enderror"
                                                value="{{ $user->mother_name }}">
                                            @error('mother_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName">Email <span
                                                    class="spanstyle">(English)</span></label>
                                            <input type="text" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ $user->email }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputStartDate">Date of Birth</label>
                                            <input type="" name="dob"
                                                class="form-control @error('dob') is-invalid @enderror" id="datepicker"
                                                value="{{ $user->dob }}" required="">
                                            @error('dob')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4"> Address</label>
                                            <input type="text" name="address" class="form-control" id="inputaddress4"
                                                value="{{ $user->address }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Mobile Number</label>
                                            <input type="text" name="mobile_number" class="form-control"
                                                id="inputMobileNumber" value="{{ $user->mobile_number }}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6  ">
                                            <label for="inputEmail4"> Gender</label>
                                            <div class="form-check border rounded" style="padding: 6px 0 7px 35px;">
                                                <input class="form-check-input " value="Male" id="flexRadioDefault2" type="radio"
                                                    name="gender" checked> Male
                                          &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                                                <input class="form-check-input" value="Female" id="flexRadioDefault2" type="radio"
                                                    name="gender"> Female
                                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                                                <input class="form-check-input" value="Other" id="flexRadioDefault2" type="radio"
                                                    name="gender"> Other
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Emergency Number</label>
                                            <input type="text" name="emergency_number" class="form-control"
                                                id="inputMobileNumber" value="{{ $user->emergency_number }}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4"> Basic Salary</label>
                                            <input type="text" name="basic_salary" class="form-control"
                                                id="inputaddress4" value="{{ $user->basic_salary }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Gradation No </label>
                                            <input type="text" name="gradation_no" class="form-control"
                                                id="inputMobileNumber" value="{{ $user->gradation_no }}">
                                        </div>
                                    </div>










                                    <div class="form-group">
                                        <label for="inputDesignation">Designation</label>
                                        <input type="text" name="designation"
                                            class="form-control @error('designation') is-invalid @enderror"
                                            id="inputDesignation" value="{{ $user->designation }}">
                                        @error('designation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDepartment">Department</label>
                                        <select class="form-control" name="department_id">
                                            {@foreach ($allDepartments as $dept)
                                                <option value="{{ $dept->id }}"
                                                    @if ($user->department_id == $dept->id) selected @endif>
                                                    {{ $dept->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputStartDate">Start date</label>
                                            <input type="" name="start_from"
                                                class="form-control @error('start_from') is-invalid @enderror"
                                                id="datepicker" value="{{ $user->start_from }}" required="">
                                            @error('start_from')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputImage">Image</label>
                                            <input type="file" accept="image/*" name="image"
                                                class="form-control @error('image') is-invalid @enderror" id="">
                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">Login Information</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror" required=""
                                            value="{{ $user->email }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Role</label>
                                        <select class="form-control" name="role_id" name="role_id" required="">
                                            @foreach ($allRoles as $roleOption)
                                                <option value="{{ $roleOption->id }}"
                                                    @if ($user->role_id == $roleOption->id) selected @endif>
                                                    {{ $roleOption->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @if (isset(auth()->user()->role->permission['name']['user']['can-edit']))
                                <button type="submit" class="btn btn-primary mt-4">Update User</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
