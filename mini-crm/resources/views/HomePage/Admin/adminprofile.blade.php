@extends('dashlayouts.master')

@section('css')
<link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">


    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/font-awesome.css') }}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css') }}">

    <!-- Liner icon -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        <div class="page-main-header">

        </div>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->

            <!-- Page Sidebar Ends-->

            <!-- Right sidebar Start-->

            <!-- Right sidebar Ends-->

            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Profile
                                        {{-- <small>Multikart Admin panel</small> --}}
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i data-feather="home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">Settings</li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    @foreach ( $data as $item )
                                    <div class="profile-details text-center">
                                        <td>
                                            @if ($item->image)
                                            <img src="{{ $item->image }}" alt="Image" width="100" height="100">

                                            @else
                                            No Image
                                            @endif
                                           </td>

                                        <h5 class="f-w-600 mb-0">{{ $item->name }}</h5>
                                        <span>{{ $item->email }}</span>
                                        <div class="social">
                                            {{-- <div class="form-group btn-showcase">
                                                <button class="btn social-btn btn-fb d-inline-block"> <i
                                                        class="fa fa-facebook"></i></button>
                                                <button class="btn social-btn btn-twitter d-inline-block"><i
                                                        class="fa fa-google"></i></button>
                                                <button class="btn social-btn btn-google d-inline-block me-0"><i
                                                        class="fa fa-twitter"></i></button>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="project-status">
                                        <h5 class="f-w-600">Employee Status</h5>
                                        <div class="media">
                                            <div class="media-body">
                                                <h6>Performance<span class="pull-right">80%</span></h6>
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 90%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <h6>Overtime <span class="pull-right">60%</span></h6>
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                        style="width: 60%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <h6>Leaves taken<span class="pull-right">70%</span></h6>
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 70%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="card tab2-card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" id="top-profile-tab"
                                                data-bs-toggle="tab" href="#top-profile" role="tab"
                                                aria-controls="top-profile" aria-selected="true"><i data-feather="user"
                                                    class="me-2"></i>Profile</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" id="contact-top-tab"
                                                data-bs-toggle="tab" href="#top-contact" role="tab"
                                                aria-controls="top-contact" aria-selected="false"><i
                                                    data-feather="settings" class="me-2"></i>Contact</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="top-tabContent">
                                        <div class="tab-pane fade show active" id="top-profile" role="tabpanel"
                                            aria-labelledby="top-profile-tab">
                                            <h5 class="f-w-600">Profile</h5>
                                            <div class="table-responsive profile-table">
                                                <table class="table table-borderless">
                                                    <tbody>

                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>{{ $item->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Password</td>
                                                            <td>{{ $item->password }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email </td>
                                                            <td>{{ $item->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>address</td>
                                                            <td>{{ $item->address }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>phone</td>
                                                            <td>{{ $item->phone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>image</td>
                                                            <td>
                                                                @if ($item->image)
                                                                <img src="{{ $item->image }}" alt="Image" width="100" height="100">

                                                                @else
                                                                No Image
                                                                @endif
                                                               </td>
                                                        </tr>


                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="top-contact" role="tabpanel"
                                            aria-labelledby="contact-top-tab">
                                            <div class="account-setting">

                                                <div class="row">

                                                </div>
                                            </div>
                                            <div class="account-setting deactivate-account">

                                                <div class="row">

                                                    <form action="{{ url('profile/' .$item->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method("PATCH")
                                                        <input type="hidden" name="id" value="{{ $item->id }}" id="id">
                                                        <label>Name</label><br>
                                                        <input type="text" name="name" value="{{ $item->name}}" id="name" class="form-control"><br>
                                                        <span>@error('name'){{$message}} @enderror</span><br><br>

                                                        <label>Email</label><br>
                                                        <input type="email" name="email" value="{{ $item->email}}"   id="email" class="form-control"><br>
                                                        <span>@error('email'){{$message}} @enderror</span><br><br>

                                                        <label>Password</label><br>
                                                        <input type="password" name="password" value="{{ $item->password}}"   id="password" class="form-control"><br>
                                                        <span>@error('password'){{$message}} @enderror</span><br><br>

                                                        <label>Address</label><br>
                                                        <input type="text" name="address" value="{{ $item->address}}"   id="address" class="form-control"><br>
                                                        <span>@error('address'){{$message}} @enderror</span><br><br>

                                                        <label>Phone</label><br>
                                                        <input type="text" name="phone" value="{{ $item->phone}}"   id="phone" class="form-control"><br>
                                                        <span>@error('phone'){{$message}} @enderror</span><br><br>

                                                        @if ($item->image)
                                                        <img src="{{ asset('assets/img/' . $item->image) }}" alt="Existing Image" width="100" height="100"><br>
                                                        @endif
                                                    <!-- Allow uploading a new image -->
                                                        <input type="file" name="image" id="image" accept="image/*" class="form-control"><br>
                                                        <span>@error('image'){{$message}} @enderror</span><br><br>
                                                        <input type="submit" value="Update" class="btn btn-success"><br>
                                                    </form>

                                            </div>

                                            <form method="POST" action="{{ url('profile' . '/' . $item->id  ) }}" style="display: inline;">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn  btn-sm" onclick="return confirm('Confirm Delete?')"><i class="fa fa-trash" title="Delete" style="font-size:30px;color:red"></i></button>

                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>

            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright text-start">
                            <p class="mb-0">Copyright 2019 © Multikart All rights reserved.</p>
                        </div>
                        <div class="col-md-6 pull-right text-end">
                            <p class=" mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>
    </div>

    @endsection
