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

                @if ($errors->any())
                    {!! implode('', $errors->all('<li class="alert alert-danger">:message</li>')) !!}
                @endif
                <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row justify-content-center">
                        <div class="col-md-12">

                            <div class="card">
                                <div class="card-header">General Information</div>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName">Name <span
                                                    class="spanstyle">(English)</span></label>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName">Name <span class="spanstyle">(Bangla)</span></label>
                                            <input type="text" name="name_bn"
                                                class="form-control @error('name_bn') is-invalid @enderror">
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
                                                class="form-control @error('father_name') is-invalid @enderror">
                                            @error('father_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName">Mother Name </label>
                                            <input type="text" name="mother_name"
                                                class="form-control @error('mother_name') is-invalid @enderror">
                                            @error('mother_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName">Email </label>
                                            <input type="text" name="email"
                                                class="form-control @error('email') is-invalid @enderror">
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
                                                required="">
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
                                            <input type="text" name="address" class="form-control" id="inputaddress4">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Mobile Number</label>
                                            <input type="text" name="mobile_number" class="form-control"
                                                id="inputMobileNumber">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6  ">
                                            <label for="inputEmail4"> Gender</label>
                                            <div class="form-check border rounded" style="padding: 6px 0 7px 35px;">
                                                <input class="form-check-input " value="Male" id="flexRadioDefault2"
                                                    type="radio" name="gender" checked> Male
                                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                                                <input class="form-check-input" value="Female" id="flexRadioDefault2"
                                                    type="radio" name="gender"> Female
                                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                                                <input class="form-check-input" value="Other" id="flexRadioDefault2"
                                                    type="radio" name="gender"> Other
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Emergency Number</label>
                                            <input type="text" name="emergency_number" class="form-control"
                                                id="inputMobileNumber">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4"> Basic Salary</label>
                                            <input type="text" name="basic_salary" class="form-control"
                                                id="inputaddress4">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Gradation No </label>
                                            <input type="text" name="gradation_no" class="form-control"
                                                id="inputMobileNumber">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4"> Join Date</label>

                                            <input type="" name="join_date"
                                                class="form-control @error('join_date') is-invalid @enderror"
                                                id="datepicker1" required="">
                                            @error('join_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">BCS Batch</label>
                                            <input type="text" name="bcs_batch" class="form-control"
                                                id="inputMobileNumber">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Department</label>
                                            <select class="form-control" name="department_id">
                                                <option selected value="" disabled>Select</option>
                                                @foreach ($departments as $dept)
                                                    <option value="{{ $dept->id }}">
                                                        {{ $dept->name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @error('department_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Permanent Document</label>
                                            <input type="file" name="permanent_doc" class="form-control"
                                                id="inputMobileNumber">
                                        </div>
                                    </div>



                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Permanent Date</label>
                                            <input type="" name="permanent_date"
                                                class="form-control @error('permanent_date') is-invalid @enderror"
                                                id="datepicker3">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Designation</label>
                                            <input type="text" name="designation" class="form-control"
                                                id="inputMobileNumber">

                                            @error('designation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Relationship Number</label>
                                            <input type="text" name="relationship_number" class="form-control"
                                                id="inputaddress4">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Driving License </label>
                                            <input type="text" name="driving_license" class="form-control"
                                                id="inputMobileNumber">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4"> Freedom Fighter</label>
                                            <div class="form-check border rounded" style="padding: 6px 0 7px 35px;">
                                                <input class="form-check-input " value="Yes" id="flexRadioDefault2"
                                                    type="radio" name="freedom_fighter"> Yes
                                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                                                <input class="form-check-input" value="No" id="flexRadioDefault2"
                                                    type="radio" name="freedom_fighter" checked> No
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Marital Status</label>
                                            <select class="form-control" name="marital_status_id">
                                                <option selected value="" disabled>Select</option>
                                                @foreach ($allMarital as $marit)
                                                    <option value="{{ $marit->id }}">
                                                        {{ $marit->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Religion</label>
                                            <select class="form-control" name="religion_id">
                                                <option selected value="" disabled>Select</option>
                                                @foreach ($allReligion as $reli)
                                                    <option value="{{ $reli->id }}">
                                                        {{ $reli->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Blood</label>

                                            <select class="form-control" name="blood_id">
                                                <option selected value="" disabled>Select</option>
                                                @foreach ($allBloods as $blood)
                                                    <option value="{{ $blood->id }}">
                                                        {{ $blood->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Country</label>

                                            <select class="form-control" name="country_id">
                                                <option selected value="" disabled>Select</option>
                                                @foreach ($allCountry as $country)
                                                    <option value="{{ $country->countryname }}">
                                                        {{ $country->countryname }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">District</label>

                                            <select class="form-control" name="district_id">
                                                <option selected value="" disabled>Select</option>
                                                @foreach ($allDistrict as $dist)
                                                    <option value="{{ $dist->id }}">
                                                        {{ $dist->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputStartDate">Start date</label>
                                            <input type="" name="start_from"
                                                class="form-control @error('start_from') is-invalid @enderror"
                                                id="datepicker2">
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
                                        <div class="form-group col-md-6">

                                            <div class="form-group">
                                                <label for="email">Birth Certificate No</label>
                                                <input type="text" name="birth_no" class="form-control"
                                                    placeholder="Birth Certificate No">
                                            </div>

                                        </div>




                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="email">Role</label>
                                                <select class="form-control" name="role_id" name="role_id"
                                                    required="">
                                                    @foreach ($roles as $roleOption)
                                                        <option value="{{ $roleOption->id }}">
                                                            {{ $roleOption->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="password">Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    @if (isset(auth()->user()->role->permission['name']['user']['can-edit']))
                                        <button type="submit" class="btn btn-primary mt-4">Update User</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection
