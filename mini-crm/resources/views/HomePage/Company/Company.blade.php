@extends('Layouts.master')

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
    <br><br><br><br><br><br><br><br><br>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-lg-2 col-md-4 col-sm-12">
                <!-- Sidebar Content Goes Here -->
            </div>

            <!-- Content Column -->
            <div class="col-lg-9 col-md-8 col-sm-12">


                <a style="display: inline" href=" {{ url('/companies/create') }}"> <button class="btn btn-primary mb-2">Add
                        New Company
                    </button></a>

                <form style="display: inline; margin-left:560px;" action="{{ url('/companies') }}" method="GET">
                    <input type="text" name="search" placeholder="Search"
                        value="{{ old('search', request('search')) }}">
                    <button class="btn btn-primary mb-2" type="submit">Search</button>
                </form>
                {{-- </div>
                <button class="btn btn-primary mb-2" type="submit" >PDF</button>
                <button class="btn btn-primary mb-2" type="submit" >EXSEL</button>
                    </div> --}}

                <div class="card-body">
                    <div class="table-responsive table-desi">
                        <table id="example" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>logo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($company as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>

                                        <td>
                                            @if ($item->logo)
                                                <img src="{{ asset($item->logo) }}" alt="logo" width="100"
                                                    height="100">
                                            @else
                                                No Logo
                                            @endif
                                        </td>
                                        <td>



                                            <a href="{{ url('/companies/' . $item->id . '/edit') }}"> <button
                                                    class="btn  btn-sm"> <i class="fa fa-edit" title="Edit"
                                                        style="font-size:30px;color:green"></i></button></a>

                                            <form method="POST" action="{{ url('/companies' . '/' . $item->id) }}"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-sm delete-confirm">
                                                    <i class="fa fa-trash" title="Delete"
                                                        style="font-size:30px;color:red"></i>
                                                </button>

                                            </form>
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>

                        </table>


                    </div>
                </div>
                {{ $company->links() }}
            </div>
        </div>

    </div>
    </div>
@endsection
