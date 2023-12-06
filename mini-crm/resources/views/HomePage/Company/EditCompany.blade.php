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

<div class="card" style="margin-left: 280px;margin-right:20px">
    <div class="card-header">
      Edit Company
    </div>
    <div class="card-body">
        <form action="{{ url('companies/' .$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <input type="hidden" name="id" value="{{ $data->id }}" id="id">

            <label>Name</label><br>
            <input type="text" name="name" value="{{ $data->name}}" id="name" class="form-control"><br>
            <span style="color: red">@error('name'){{$message}} @enderror</span><br><br>

            <label>Email</label><br>
            <input type="email" name="email" value="{{ $data->email}}"   id="email" class="form-control"><br>
            <span style="color: red">@error('email'){{$message}} @enderror</span><br><br>

            @if ($data->logo)
            <img src="{{ asset('assets/img/' . $data->logo) }}" alt="Existing Image" width="100" height="100"><br>
            @endif

            <input type="file" name="logo" id="logo" accept="image/*" class="form-control"><br>
            <span style="color: red">@error('logo'){{$message}} @enderror</span><br><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    </div>


@endsection
