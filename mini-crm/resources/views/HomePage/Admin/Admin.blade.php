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
<br><br><br><br><br><br><br><br><br>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-2 col-md-4 col-sm-12">
            <!-- Sidebar Content Goes Here -->
        </div>

        <!-- Content Column -->
        <div class="col-lg-9 col-md-8 col-sm-12">
            <div class="card">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <a href=" {{ url('/Admin/create') }}"> <button class="btn btn-primary mb-2">Add New  Admin
                   </button></a>

                </div>

                <div class="card-body">
                    <div class="table-responsive table-desi">
                        <table class="table all-package table-category" id="editableTable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email </th>
                                    <th>password</th>
                                    <th>address</th>
                                    <th>phone</th>
                                    <th>image</th>
                                </tr>
                            </thead>
                            <tbody>

                    @foreach ( $data as $item )
                    <tr>

                      <td>{{ $item->username }}</td>
                      <td>{{ $item->email}}</td>
                      <td>{{ $item->password}}</td>
                      <td>{{ $item->address}}</td>
                      <td>{{ $item->phone}}</td>
                     <td>
                      @if ($item->image)
                      <img src="{{ $item->image }}" alt="Image" width="100" height="100">

                      @else
                      No Image
                      @endif
                     </td>

                    <td>



                {{-- <a href="{{ url('/Admin/' . $item->id . '/edit') }}"> <button
                    class="btn  btn-sm"> <i class="fa fa-edit" title="Edit" style="font-size:30px;color:green"></i></button></a> --}}
                    <!-- Delete Admin form (you can use a modal for confirmation) -->
                   <form method="POST" action="{{ url('/Admin' . '/' . $item->id  ) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn  btn-sm" onclick="return confirm('Confirm Delete?')"><i class="fa fa-trash" title="Delete" style="font-size:30px;color:red"></i></button>

                    </form>
                    </td>


                    </tr>

                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Column Ends -->
    </div>
</div>
@endsection
