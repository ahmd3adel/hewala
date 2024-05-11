@extends('admin.app')

@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Page Title</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Page</li>
        </ol>
    </div><!-- /.col -->
@endsection


@section('content')
    <div class="container">
        <h2 class="text-center mb-5">إنشاء مستخدم جديد</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf <!-- CSRF Protection -->

                            <div class="form-group">
                                <label for="name">الاسم:</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">كلمة المرور:</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="admin_password">كلمة المرور للمسؤول:</label>
                                <input type="password" class="form-control @error('admin_password') is-invalid @enderror" id="admin_password" name="admin_password" required>
                                @error('admin_password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">انشاء</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
