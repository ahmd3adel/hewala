@extends('admin.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card user-profile-card">
                    <div class="card-body">
                        <div class="row align-items-stretch">
                            <div class="col-md-3">
                                <div class="text-center d-flex flex-column">
                                    <div class="profile-picture">
                                        <img src="{{ asset('assets/dist/img/avatar.png') }}" class="img-fluid rounded-circle mx-auto" alt="Profile Image" style="max-width: 100%;">
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="profile-info">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><strong>الاسم:</strong> {{$user->name}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><strong>البريد الإلكتروني:</strong> {{$user->email}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><strong>الدور:</strong> {{$user->role}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><strong>العنوان:</strong> {{$user->address}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary">تحديث المعلومات</button>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

