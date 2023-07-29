@extends('components.app')
@extends('components.sidebar')
@extends('components.topbar')
@extends('components.footer')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @error('firstName')
            <div class="alert alert-danger">
                Data yang dimasukan tidak valid !
            </div>
        @enderror

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Pengguna</h1>

    </div>
    <!-- /.container-fluid -->
@endsection
