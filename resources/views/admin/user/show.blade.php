@extends('admin.layouts.master')

@section('content')
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4 no-print">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-md-5 col-auto mb-3 float-left">
                        <h4 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            View User
                        </h4>
                    </div>
                    <div class="col-md-7 float-right">
                        <button class="btn btn-primary btn-xs pull-right" onclick="window.print()"><i class="fa fa-print"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container-xl px-4 mt-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->

                        <img width="100" class="img-account-profile  mb-2"
                            src="{{ asset('profile') }}/{{ $user->image }}" alt="">

                        <!-- Profile picture help block-->
                        {{-- <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div> --}}
                        <!-- Profile picture upload button-->
                        {{-- <button class="btn btn-primary" type="button">Upload new image</button> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="fw-bold">Name <span class="spanstyle">(English)</span></div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->name }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-bold">Name <span class="spanstyle">(Bangla)</span></div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->name_bn }}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="fw-bold">Father Name </div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->father_name }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-bold">Mother Name</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->mother_name }}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="fw-bold">Date Of Birth </div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->dob }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-bold">Email</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->email }}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="fw-bold">Address</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->address }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-bold">Gender</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->gender }}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="fw-bold">Mobile Number</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->mobile_number }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-bold">Emergency Number</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->emergency_number }}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Employee Details</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="fw-bold">Basic Salary</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->basic_salary }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-bold">Gradation No</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->gradation_no }}
                                            </div>
                                        </td>
                                      
                                        <td>
                                            <div class="fw-bold">Join Date</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->join_date }}
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                          <td>
                                            <div class="fw-bold">BCS Batch</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->bcs_batch }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-bold">Department</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->department_id }}
                                            </div>
                                        </td>
                                      
                                        <td>
                                            <div class="fw-bold">Permanent Document</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->permanent_doc }}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                          <td>
                                            <div class="fw-bold">Permanent Date</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->permanent_date }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-bold">Designation</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->designation }}
                                            </div>
                                        </td>
                                      
                                        <td>
                                            <div class="fw-bold">Permanent Document</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->permanent_doc }}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Others Details</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="fw-bold">Birth Certificate Number</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->birth_no }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-bold">Nationality</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->country_id }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-bold">District</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->district_id }}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="fw-bold">Driving License</div>
                                            <div class="small text-muted d-none d-md-block">
                                                {{ $user->birtdriving_licenseh_no }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-bold">Relationship Contact Number</div>
                                            <div class="small text-muted d-none d-md-block">
                                                {{ $user->relationship_number }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-bold">Blood Group</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->blood_id }}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="fw-bold">Freedom Fighter</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->freedom_fighter }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-bold">Religion</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->religion_id }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-bold">Marital Status</div>
                                            <div class="small text-muted d-none d-md-block">{{ $user->marital_status_id }}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
